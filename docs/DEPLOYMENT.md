# Hostinger Deployment

## How deployment runs

The GitHub Actions workflow in `.github/workflows/deploy.yml` runs after every push to `main`. It connects to Hostinger over SSH, changes to the website directory, fetches the public GitHub repository, and resets the server checkout to `origin/main`.

The deployment directory is:

```text
~/domains/limitless-palegoldenrod-salmon-80.hostingersite.com/public_html
```

The workflow initializes a Git checkout in that directory if `.git` does not exist. Later runs update the existing checkout.

## Required GitHub Actions secrets

In the repository, open **Settings → Secrets and variables → Actions** and add:

| Secret | Value |
| --- | --- |
| `HOST` | Hostinger SSH hostname or IP address |
| `USERNAME` | SSH account username |
| `SSH_KEY` | Private key authorized for that SSH account |
| `PORT` | Hostinger SSH port |

Store private key contents only in the repository secret. Do not add credentials to the workflow file or commit them to the repository.

## Requirements and deployment behavior

- The Hostinger account must allow SSH connections with the configured key and port.
- The deployment user must be able to write in the target `public_html` directory.
- The GitHub repository must be fetchable from Hostinger using the HTTPS URL configured in the workflow.
- The server must provide `bash` and `git`.
- `git reset --hard origin/main` replaces tracked server files with the repository version. Do not keep server-only edits to tracked files in `public_html`.
- The workflow currently deploys the whole repository into `public_html`, including `config/`, `includes/`, `templates/`, and `docs/`.

## Troubleshooting

### `fatal: not a git repository`

The workflow initializes Git when `.git` is missing. Confirm the latest workflow version is on `main` and that the SSH account can create `.git` in `public_html`.

### `Permission denied` during SSH

Check the `HOST`, `USERNAME`, `SSH_KEY`, and `PORT` secrets. Confirm the public key is authorized for the Hostinger SSH account and the SSH service is enabled.

### Git fetch fails

Confirm Hostinger can reach GitHub over HTTPS and that the repository URL is correct. If the repository becomes private, configure server-side GitHub read access before deploying.

### A PHP startup warning appears

Hostinger may print warnings from shell startup files such as `.bashrc`. The workflow runs its deployment commands in a no-profile Bash process. Treat a startup warning separately from the final command's exit code; the `fatal` or `Process exited` line identifies the failing deployment command.
