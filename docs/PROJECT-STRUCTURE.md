# Project Structure and Editing Guide

## Request and rendering flow

Each public page keeps its existing root URL. A page entry point loads `includes/bootstrap.php` and calls `render_site_page()` with the page key. The renderer reads the corresponding record from `config/pages.php`, then loads the shared document head, header, page template, footer, and scripts in that order.

```text
about.php
  └── includes/bootstrap.php
        ├── config/pages.php
        ├── includes/head.php
        ├── includes/header.php
        ├── templates/pages/about.php
        ├── includes/footer.php
        └── includes/scripts.php
```

This keeps URLs stable while separating content from application layout.

## Directory responsibilities

### `config/pages.php`

Returns the page catalog keyed by a short page key. Each record contains:

- `title`: document title and Open Graph title
- `description`: search and Open Graph description
- `canonical`: canonical URL for the page
- `template`: matching filename under `templates/pages/`

Organization schema data and common site settings live in `includes/site-config.php`.

### `templates/pages/`

Contains page-specific HTML sections. Use the same key as the entry point and catalog record, for example `trademark-search.php` maps to `templates/pages/trademark-search.php`.

Page templates contain page-specific markup and may call shared components. Shared metadata and the site shell are provided by the renderer.

### `templates/components/`

Contains reusable HTML sections used by multiple pages. The shared `default-cta.php` component is rendered with `render_component('default-cta')`.

When a section is reused, move its markup into a component and use component variables or configuration for the differences. Keep genuinely page-specific sections inside that page's template.

### `includes/`

Contains the application bootstrap, shared layout, escaping helper, structured data, and asset includes. Keep page copy and page-specific sections out of these files.

Apache access rules deny direct requests to `config/`, `includes/`, `templates/`, and `docs/`. Public pages should be reached through their existing root entry points.

### `assets/`

Contains CSS, JavaScript, images, and the existing image endpoint. Preserve current asset URLs unless every page reference and the deployment output are updated together.

## Add a page

1. Add an entry to `config/pages.php` with its title, description, canonical path, and template key.
2. Add the corresponding markup to `templates/pages/<key>.php`.
3. Add a root `<key>.php` entry point using this pattern:

   ```php
   <?php
   declare(strict_types=1);

   require_once __DIR__ . '/includes/bootstrap.php';

   render_site_page('<key>');
   ```

4. Add links to the shared navigation or footer if users need to reach the page.

## Add a reusable component

1. Create `templates/components/<component-name>.php`.
2. Keep its HTML tags on separate lines and use four-space indentation.
3. Render it from a page template with `render_component('<component-name>')`.
4. Put component-wide defaults in a config/data file if the component needs editable copy or options.

Component names use lowercase letters, digits, and hyphens. The renderer rejects invalid names and missing component files.

## HTML and PHP style

- Put each HTML tag on its own line, including tags inside SVG markup.
- Indent nested markup by four spaces.
- Keep an empty `<textarea></textarea>` pair on one line; a newline between those tags becomes part of the submitted field value.
- Keep PHP entry points small and declare strict types before loading application files.
- Use `site_escape()` when inserting dynamic content into text or attributes.
- Use JSON encoding flags already present in `includes/head.php` for structured data.
- Keep inline JavaScript and CSS in their existing files unless a page requires a small, page-specific exception.

## Verify a change

From the project root, lint the PHP files with PHP:

```powershell
Get-ChildItem -Recurse -Filter *.php | ForEach-Object { php -l $_.FullName }
```

Then render the affected URL in the browser and check its layout, forms, navigation, and images. For a full local preview, use the steps in the root README.
