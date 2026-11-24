<?php
/** @var string $pageTitle */
/** @var string $pageDescription */
/** @var string $pageCanonical */
/** @var array<string, mixed> $pageStructuredData */

require_once __DIR__ . '/site-config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?= site_escape($pageTitle) ?>
        </title>
        <meta name="description" content="<?= site_escape($pageDescription) ?>">
        <meta name="theme-color" content="#193138">
        <link rel="canonical" href="<?= site_escape($pageCanonical) ?>">
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?= site_escape($pageTitle) ?>">
        <meta property="og:description" content="<?= site_escape($pageDescription) ?>">
        <meta property="og:site_name" content="USA Trademark Expert">
        <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon-192.png">
        <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:opsz,wght@8..60,400;8..60,500;8..60,600;8..60,700&family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css?v=1785796208" rel="stylesheet">
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-18184582139">
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){window.dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'AW-18184582139');
        </script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js">
        </script>
        <script type="application/ld+json">
            <?= json_encode($pageStructuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>
        </script>
    </head>
