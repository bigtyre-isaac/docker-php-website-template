# docker-php-website-template

This is a template I've used for hosting simple PHP based websites with Docker. It was intended for simple internal projects so may not be ideal for production use, but shouldn't have any glaring issues.

It includes:

- Docker .env support, with support for a defaults.env file. Production .env file (/.env) is excluded from git via .gitignore
- Development compose file which includes xdebug
- Includes a launch.json file for VSCode to debug it using xdebug
- Composer support with multi-stage build and a pre-configured /src/ directory ready for custom code
- Pre-configured error_reporting and xdebug config files.
- PHP extensions for APCU (caching) and redis
