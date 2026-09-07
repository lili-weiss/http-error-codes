"""Integration checks: php -S 127.0.0.1:8091, then python3 tests/smoke.py.

Only Python's standard library is required. Gallery routes intentionally return
200; Apache's ErrorDocument integration preserves real error responses.
"""
import http.cookiejar
import json
from html.parser import HTMLParser
from pathlib import Path
import re
import sys
from urllib.error import HTTPError
from urllib.request import HTTPCookieProcessor, Request, build_opener, urlopen


ROOT = Path(__file__).resolve().parents[1]
BASE = sys.argv[1] if len(sys.argv) > 1 else 'http://127.0.0.1:8091'
# Assigned 4xx statuses, plus the gallery's existing 418 teapot.
CLIENT_CODES = [*range(400, 419), *range(421, 427), 428, 429, 431, 451]
# Assigned 5xx statuses, including the historical 510; 509 is unassigned.
SERVER_CODES = [*range(500, 509), 510, 511]
SCENE_CODES = [406, 407, 411, 412, 414, 415, 416, 417, 421, 423, 424, 425, 426, 428, 431, 505, 506, 507, 510, 511]
NOTICE_CODES = [425, 510]


class Page(HTMLParser):
    def __init__(self, html):
        super().__init__(convert_charrefs=True)
        self.elements = []
        self.feed(html)

    def handle_starttag(self, tag, attrs):
        self.elements.append((tag, dict(attrs)))

    def attrs(self, tag):
        return [attrs for name, attrs in self.elements if name == tag]


def fetch(path, headers=None, opener=None):
    request = Request(BASE + path, headers=headers or {})
    try:
        response = (opener.open if opener else urlopen)(request, timeout=10)
    except HTTPError as error:
        response = error
    with response:
        return response.status, response.headers, response.read().decode('utf-8')


def check(condition, message):
    if not condition:
        raise AssertionError(message)


translations = {lang: json.loads((ROOT / 'lang' / f'{lang}.json').read_text()) for lang in ('de', 'en')}
codes = sorted(int(file.stem) for file in (ROOT / 'pages').glob('[0-9]*.php'))
check([code for code in codes if code < 500] == CLIENT_CODES, '4xx coverage is incomplete')
check([code for code in codes if code >= 500] == SERVER_CODES, '5xx coverage is incomplete')
resources = set()
for lang, strings in translations.items():
    headers = {'Accept-Language': lang}
    status, _, html = fetch('/', headers)
    check(status == 200, f'{lang}: gallery failed')
    links = [link.get('href') for link in Page(html).attrs('a')]
    check(all(links.count(f'/{code}') == 1 for code in codes), f'{lang}: gallery links missing or duplicated')
    for code in NOTICE_CODES:
        check(strings['pages'][str(code)]['notice'] in html, f'{lang}/{code}: gallery status notice missing')
    for code in codes:
        page_strings = strings['pages'][str(code)]
        for key in ('title', 'h2', 'text', 'btn', 'info_link', 'modal_title', 'modal_html'):
            check(bool(page_strings.get(key)), f'{lang}/{code}: missing {key}')
        for suffix in ('', '.html'):
            path = f'/{code}{suffix}'
            status, response_headers, html = fetch(path, headers)
            check(status == 200, f'{lang}{path}: HTTP {status}')
            check(response_headers['Content-Language'] == lang, f'{lang}{path}: wrong language header')
            check(f'<h1>{code}</h1>' in html, f'{lang}{path}: wrong code')
            check(page_strings['h2'] in html, f'{lang}{path}: wrong heading')
            check(page_strings['modal_html'] in html, f'{lang}{path}: missing explanation')
            check(all(text in html for text in page_strings['text']), f'{lang}{path}: missing copy')
            page = Page(html)
            ids = [attrs['id'] for _, attrs in page.elements if 'id' in attrs]
            check(len(ids) == len(set(ids)), f'{lang}{path}: duplicate IDs')
            check(all(id in ids for id in ('infoModal', 'openModalBtn', 'closeModalBtn')), f'{lang}{path}: missing modal controls')
            check(any(a.get('class') == 'btn' and a.get('href') == '/' for a in page.attrs('a')), f'{lang}{path}: broken home button')
            if code in SCENE_CODES:
                check('class="status-scene" aria-hidden="true"' in html, f'{lang}{path}: missing decorative scene')
                check(all(id in ids for id in ('pupil-left', 'pupil-right')), f'{lang}{path}: missing animated pupils')
            if code in NOTICE_CODES:
                check(page_strings['notice'] in html, f'{lang}{path}: status notice missing')
            for link in page.attrs('link'):
                if link.get('rel') == 'stylesheet':
                    resources.add(link['href'])
            for meta in page.attrs('meta'):
                if meta.get('property') == 'og:image':
                    check((ROOT / 'og-images' / meta['content'].rsplit('/', 1)[1]).is_file(), f'{lang}{path}: missing OG asset')

for path in resources:
    status, _, html = fetch(path)
    check(status == 200 and '<!DOCTYPE html>' not in html, f'Broken stylesheet: {path}')

jar = http.cookiejar.CookieJar()
opener = build_opener(HTTPCookieProcessor(jar))
status, headers, html = fetch('/425?lang=de', opener=opener)
check(status == 200 and headers['Content-Language'] == 'de', 'Language switch failed')
check(any(cookie.name == 'lang' and cookie.value == 'de' for cookie in jar), 'Language preference not saved')
status, headers, _ = fetch('/431', {'Accept-Language': 'en'}, opener)
check(headers['Content-Language'] == 'de', 'Language cookie must override browser preference')
_, headers, _ = fetch('/406', {'Accept-Language': 'fr, de;q=0.9, en;q=0.5'})
check(headers['Content-Language'] == 'de', 'Language negotiation failed')
_, headers, _ = fetch('/406', {'Accept-Language': 'fr'})
check(headers['Content-Language'] == 'en', 'Default language fallback failed')
for path in ('/419', '/420', '/427', '/430', '/499', '/509', '/512', '/599', '/no-such-page'):
    status, _, html = fetch(path)
    check(status == 404 and '<h1>404</h1>' in html, f'{path}: missing 404 fallback')

apache = dict(re.findall(r'^ErrorDocument (\d+) (\S+)$', (ROOT / '.htaccess').read_text(), re.M))
# Apache intentionally maps only selected errors (see the server configuration).
# Verify those targets without requiring an ErrorDocument entry for gallery pages.
check(apache.get('404') == '/notfound', 'Missing Apache 404 fallback')
for code, target in apache.items():
    check(int(code) in codes, f'{code}: Apache mapping has no gallery page')
    expected = '/notfound' if code == '404' else f'/{code}'
    check(target == expected, f'{code}: wrong Apache error target')
    status, _, _ = fetch(target)
    check(status == 200, f'{code}: Apache error target is not reachable')

print(f'Passed: {len(codes)} pages × 2 languages × 2 URL formats; {len(CLIENT_CODES)} 4xx and {len(SERVER_CODES)} 5xx codes complete.')
print('Passed: gallery, translations, assets, language switch/cookies, fallback routes and Apache mappings.')
