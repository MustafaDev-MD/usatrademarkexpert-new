# USA Trademark Expert Website

A PHP website for trademark registration, search, monitoring, renewals, copyright services, and related information. Public `.php` URLs are kept at the project root for compatibility, while page content, metadata, shared layout, and components are organized into dedicated directories.

## Requirements

- PHP 8.0 or newer
- Apache with PHP, XAMPP, or the PHP built-in development server
- An internet connection for the external Google Fonts, Bootstrap, jQuery, and Zendesk resources used by the site

The site has no Composer or Node.js dependency installation step.

Apache access rules in `config/`, `includes/`, `templates/`, and `docs/` prevent direct browser access to application files and internal documentation.

## Run locally

From the project directory, start PHP's built-in server:

```powershell
php -S 127.0.0.1:8000
```

Open `http://127.0.0.1:8000/` or visit a page directly, such as `http://127.0.0.1:8000/about.php`.

## Project structure

```text
assets/
  css/                    Site styles
  img/                    Logos and images
  js/                     Front-end scripts
  photo.php               Existing image endpoint
config/
  pages.php               Page titles, descriptions, canonical URLs, and template map
docs/
  .htaccess               Prevents direct web access to project documentation
  DEPLOYMENT.md           GitHub Actions and Hostinger deployment guide
  PROJECT-STRUCTURE.md    Rendering flow and contribution guide
includes/
  bootstrap.php           Shared page and component rendering functions
  footer.php              Shared site footer
  head.php                Shared document head and metadata output
  header.php              Shared announcement bar and navigation
  scripts.php             Shared external and local scripts
  site-config.php         Site identity, theme color, escaping, and schema data
templates/
  components/             Reusable page sections
  pages/                  Page-specific HTML markup
*.php                     Stable public page entry points
.github/workflows/
  deploy.yml              Deploys the main branch to Hostinger
```

See [docs/PROJECT-STRUCTURE.md](docs/PROJECT-STRUCTURE.md) for how pages and components are connected.

## Add or edit a page

1. Add the page title, description, canonical path, and template key to `config/pages.php`.
2. Create the page markup at `templates/pages/<page-key>.php`.
3. Add a root entry point that calls `render_site_page('<page-key>')`.
4. Keep repeated site-wide sections in `templates/components/` and call them with `render_component('<component-name>')`.

Keep existing root `.php` URLs when editing current pages; navigation, forms, and search engines may already use them.

## Code style

- Use four spaces for indentation.
- Put each HTML tag on its own line and nest it according to the document structure.
- Use lowercase kebab-case for new page, component, and documentation filenames.
- Keep page copy in page templates, SEO fields in `config/pages.php`, and site-wide markup in shared includes or components.
- Escape dynamic text and attributes with `site_escape()`.

## Deployment

Every push to `main` runs `.github/workflows/deploy.yml` and deploys the repository to the configured Hostinger `public_html` directory. The workflow requires the repository Actions secrets `HOST`, `USERNAME`, `SSH_KEY`, and `PORT`.

Read [docs/DEPLOYMENT.md](docs/DEPLOYMENT.md) before changing the deployment path or server-side Git setup.
