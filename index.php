<?php
// Copyright (c) 2026 Lili Weiss (https://goli.li/me). All rights reserved.
// Front controller: every request is routed through this file (see .htaccess).
declare(strict_types=1);

require __DIR__ . '/core/i18n.php';
require __DIR__ . '/core/template.php';

// Language: ?lang=xx switch > cookie > Accept-Language header > default.
i18n_boot(['de', 'en'], 'en', __DIR__ . '/lang');

// --- Routing ---------------------------------------------------------------
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$id   = strtolower(trim($path, '/'));

if ($id === '' || $id === 'index' || $id === 'index.php' || $id === 'index.html') {
    $id = 'home';
}
if (substr($id, -5) === '.html') { // legacy links like /404.html
    $id = substr($id, 0, -5);
}

if (!preg_match('/^[a-z0-9-]+$/', $id) || !is_file(__DIR__ . "/pages/$id.php")) {
    // Unknown route: show the "no page for this yet" monster.
    // (When Apache serves this via ErrorDocument, the original status is kept.)
    $id = 'notfound';
    http_response_code(404);
}

render_page($id, require __DIR__ . "/pages/$id.php");
