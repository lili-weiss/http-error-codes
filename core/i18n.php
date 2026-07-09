<?php
// Copyright (c) 2026 Lili Weiss (https://goli.li/me). All rights reserved.
// Tiny i18n layer: language negotiation + translation lookup.
declare(strict_types=1);

$GLOBALS['__i18n'] = [
    'lang'      => 'en',
    'supported' => ['de', 'en'],
    'strings'   => [],
    'fallback'  => [],
];

/**
 * Determine the language and load translations.
 * Priority: ?lang= switch (persisted in a cookie) > cookie > Accept-Language > $default.
 */
function i18n_boot(array $supported, string $default, string $langDir): void
{
    $g = &$GLOBALS['__i18n'];
    $g['supported'] = $supported;

    // 1. Explicit switch via ?lang=xx -> save cookie, redirect to the clean URL.
    if (isset($_GET['lang'])) {
        $choice = strtolower((string) $_GET['lang']);
        if (in_array($choice, $supported, true)) {
            setcookie('lang', $choice, [
                'expires'  => time() + 31536000, // 1 year
                'path'     => '/',
                'samesite' => 'Lax',
            ]);
        }
        header('Location: ' . strtok($_SERVER['REQUEST_URI'] ?? '/', '?'), true, 302);
        exit;
    }

    // 2. Saved preference.
    $lang = $_COOKIE['lang'] ?? null;
    if (!in_array($lang, $supported, true)) {
        // 3. Browser preference (Accept-Language request header).
        $lang = i18n_negotiate($_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '', $supported) ?? $default;
    }

    $g['lang']     = $lang;
    $g['strings']  = i18n_load("$langDir/$lang.json");
    $g['fallback'] = $lang === $default ? $g['strings'] : i18n_load("$langDir/$default.json");

    header('Content-Language: ' . $lang);
    header('Vary: Cookie, Accept-Language');
}

/** Pick the best supported language from an Accept-Language header. */
function i18n_negotiate(string $header, array $supported): ?string
{
    $best = null;
    $bestQ = 0.0;
    foreach (explode(',', $header) as $part) {
        $bits = explode(';', trim($part));
        $tag  = strtolower(trim($bits[0]));
        if ($tag === '') {
            continue;
        }
        $q = 1.0;
        foreach (array_slice($bits, 1) as $param) {
            if (preg_match('/^\s*q\s*=\s*([0-9.]+)/', $param, $m)) {
                $q = (float) $m[1];
            }
        }
        $primary = explode('-', $tag)[0]; // "de-AT" -> "de"
        if ($q > $bestQ && in_array($primary, $supported, true)) {
            $best  = $primary;
            $bestQ = $q;
        }
    }
    return $best;
}

function i18n_load(string $file): array
{
    $data = is_file($file) ? json_decode((string) file_get_contents($file), true) : null;
    return is_array($data) ? $data : [];
}

/** Current language code, e.g. "de". */
function lang(): string
{
    return $GLOBALS['__i18n']['lang'];
}

/** All supported language codes. */
function languages(): array
{
    return $GLOBALS['__i18n']['supported'];
}

/**
 * Translation lookup with dot notation, e.g. t('pages.404.h2').
 * Falls back to the default language; returns null if the key is missing.
 * May return a string or an array (for lists of paragraphs).
 */
function t(string $key)
{
    foreach (['strings', 'fallback'] as $src) {
        $node = $GLOBALS['__i18n'][$src];
        foreach (explode('.', $key) as $k) {
            if (!is_array($node) || !array_key_exists($k, $node)) {
                $node = null;
                break;
            }
            $node = $node[$k];
        }
        if ($node !== null) {
            return $node;
        }
    }
    return null;
}
