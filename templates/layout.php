<?php /* Shared layout. Variables provided by render_page(): $id, $page, $title, $description, $og, $base, $path */ ?>
<!-- Copyright (c) 2026 Lili Weiss (https://goli.li/me). All rights reserved. -->
<!DOCTYPE html>
<html lang="<?= e(lang()) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="description" content="<?= e($description) ?>">
    <meta name="keywords" content="<?= e((string) t('common.keywords')) ?>">
    <meta name="author" content="Lili Weiss">
    <meta name="robots" content="index, follow">

    <meta property="og:type" content="website" />
<?php if (is_file(__DIR__ . '/../og-images/' . $og . '.png')): ?>
    <meta property="og:image" content="<?= e($base) ?>/og-images/<?= e($og) ?>.png" />
<?php endif; ?>
    <meta property="og:url" content="<?= e($base . ($id === 'home' ? '' : '/' . $id)) ?>" />
    <meta property="og:title" content="<?= e($title) ?>" />
    <meta property="og:description" content="<?= e($description) ?>" />
    <meta property="og:locale" content="<?= lang() === 'de' ? 'de_DE' : 'en_US' ?>" />

    <title><?= e($title) ?></title>
    <link rel="stylesheet" href="/assets/site.css">
<?php foreach ($page['stylesheets'] ?? [] as $stylesheet): ?>
    <link rel="stylesheet" href="<?= e($stylesheet) ?>">
<?php endforeach; ?>
<?php if (!empty($page['css'])): ?>
    <style>
<?= $page['css'] ?>
    </style>
<?php endif; ?>
</head>
<body>

    <div class="background-container">
        <div class="cloud cloud-1"></div>
        <div class="cloud cloud-2"></div>
        <div class="cloud cloud-3"></div>
        <div class="dream-bubble" style="width: 20px; height: 20px; left: 15%; animation-delay: 0s;"></div>
        <div class="dream-bubble" style="width: 35px; height: 35px; left: 40%; animation-delay: 2s;"></div>
        <div class="dream-bubble" style="width: 25px; height: 25px; left: 65%; animation-delay: 5s;"></div>
        <div class="dream-bubble" style="width: 45px; height: 45px; left: 80%; animation-delay: 1s;"></div>
        <div class="dream-bubble" style="width: 15px; height: 15px; left: 90%; animation-delay: 7s;"></div>
        <div class="sparkle" style="top: 20%; left: 25%; animation-delay: 0s;"></div>
        <div class="sparkle" style="top: 40%; left: 10%; animation-delay: 1s;"></div>
        <div class="sparkle" style="top: 15%; left: 75%; animation-delay: 2s;"></div>
        <div class="sparkle" style="top: 60%; left: 85%; animation-delay: 1.5s;"></div>
        <div class="sparkle" style="top: 80%; left: 50%; animation-delay: 3s;"></div>
<?= $page['background_extra'] ?? '' ?>
    </div>

    <nav class="lang-switch" aria-label="<?= e((string) t('common.lang_label')) ?>">
<?php foreach (languages() as $l): ?>
        <a href="<?= e($path) ?>?lang=<?= e($l) ?>"<?= $l === lang() ? ' class="active" aria-current="true"' : '' ?>><?= e(strtoupper($l)) ?></a>
<?php endforeach; ?>
    </nav>

    <div class="main-wrapper">
        <div class="error-container">
<?php if ($id === 'home'): ?>
<?= $page['scene'] ?? '' ?>

            <h1><?= t('pages.home.h1') ?></h1>
<?php foreach ((array) (t('pages.home.intro') ?? []) as $p): ?>
            <p class="subtitle"><?= $p ?></p>
<?php endforeach; ?>

            <div class="grid-container">
<?php foreach ($page['codes'] ?? [] as $code => $name): ?>
                <a href="/<?= e((string) $code) ?>" class="status-btn"><strong><?= e((string) $code) ?></strong><span><?= e($name) ?></span><?php if ($notice = t("pages.$code.notice")): ?><small class="status-notice"><?= e($notice) ?></small><?php endif; ?></a>
<?php endforeach; ?>
            </div>

            <p class="footer">Copyright &copy; 2026 Lili Weiss (<a href="https://goli.li/me" target="_blank" rel="noopener noreferrer">https://goli.li/me</a>). All rights reserved.</p>
<?php else: ?>
            <h1><?= e((string) ($page['code'] ?? $id)) ?></h1>

<?= $page['scene'] ?? '' ?>

            <h2><?= t("pages.$id.h2") ?></h2>
<?php if ($notice = t("pages.$id.notice")): ?>
            <p class="status-notice"><?= e($notice) ?></p>
<?php endif; ?>
<?php foreach ((array) (t("pages.$id.text") ?? []) as $p): ?>
            <p><?= $p ?></p>
<?php endforeach; ?>

            <a href="/" class="btn"><?= t("pages.$id.btn") ?></a>

            <a class="info-link" id="openModalBtn" role="button" tabindex="0"><?= t("pages.$id.info_link") ?></a>
<?php endif; ?>
        </div>
    </div>

<?php if ($id !== 'home'): ?>
    <div class="modal-overlay" id="infoModal">
        <div class="modal-content">
            <button class="modal-close" id="closeModalBtn">&times;</button>
            <h3><?= t("pages.$id.modal_title") ?></h3>
<?= t("pages.$id.modal_html") ?>
        </div>
    </div>
<?php endif; ?>

    <script src="/assets/site.js"></script>
</body>
</html>
