<?php
// Copyright (c) 2026 Lili Weiss (https://goli.li/me). All rights reserved.
// Minimal template system: pages return a config array, the layout renders it.
declare(strict_types=1);

const SITE_BASE_URL = 'https://errors.liliweiss.dev';

/** HTML-escape helper. */
function e(?string $s): string
{
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
}

/**
 * Render a page through the shared layout.
 *
 * Page config keys (all optional unless noted):
 *   'code'             HTTP status code shown in the <h1> (error pages)
 *   'og'               basename of the /og-images/*.png preview image
 *   'css'              page-specific CSS, appended after the shared stylesheet
 *   'scene'            HTML of the monster scene (incl. its shadow)
 *   'background_extra' extra HTML inside the animated background
 *   'codes'            [code => official name] map (gallery grid, home only)
 */
function render_page(string $id, array $page): void
{
    $title       = (string) (t("pages.$id.title") ?? 'errors.liliweiss.dev');
    $description = (string) (t('common.meta_description') ?? '');
    $og          = (string) ($page['og'] ?? $id);
    $base        = SITE_BASE_URL;
    $path        = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

    include __DIR__ . '/../templates/layout.php';
}
