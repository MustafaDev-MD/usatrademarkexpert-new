<?php
declare(strict_types=1);

/** Initialize shared site configuration before rendering a page. */
require_once __DIR__ . '/site-config.php';

/** Render a public page using its metadata, page template, and shared layout. */
function render_site_page(string $pageKey): void
{
    static $pages;

    if ($pages === null) {
        $pages = require dirname(__DIR__) . '/config/pages.php';
    }

    if (!isset($pages[$pageKey])) {
        http_response_code(404);
        echo 'Page not found.';
        return;
    }

    $page = $pages[$pageKey];
    $pageTitle = $page['title'];
    $pageDescription = $page['description'];
    $pageCanonical = $page['canonical'];
    $pageName = $pageKey;
    $pageStructuredData = site_structured_data();

    require __DIR__ . '/head.php';
    require __DIR__ . '/header.php';
    require dirname(__DIR__) . '/templates/pages/' . $page['template'] . '.php';
    require __DIR__ . '/footer.php';
    require __DIR__ . '/scripts.php';

    echo "\n</body>\n</html>\n";
}

/** Render a reusable template component from the shared component directory. */
function render_component(string $component): void
{
    if (!preg_match('~^[a-z0-9-]+$~D', $component)) {
        throw new InvalidArgumentException('Invalid component name.');
    }

    $componentPath = dirname(__DIR__) . '/templates/components/' . $component . '.php';
    if (!is_file($componentPath)) {
        throw new InvalidArgumentException('Unknown component: ' . $component);
    }

    require $componentPath;
}
