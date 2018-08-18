# CNH Circle K Website
CNH Circle K's website is built using WordPress. This project was generated using [Bedrock](https://roots.io/bedrock/).

> Bedrock is a modern WordPress stack that helps you get started with the best development tools and project structure.

The project consists of two major components: the WordPress installation and the theme.

The theme is located in [`web/app/themes/cnh`](/web/app/themes/cnh). Refer to its documentation for more information. **Most development will be located here.**

## Requirements

* PHP >= 5.5
* MySQL
* Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
* Node.js - [Install](https://nodejs.org/en/)

## Getting Started

### 0. Set up your environment

#### Composer

Composer is a dependency manager for PHP.

[Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

#### Node.js + npm

We use Node.js and npm to build the frontend.

[Install](https://nodejs.org/en/)


#### Web Server
> Skip this if you already have a web server set up.

Choose a development environment setup that works best for you.

Some options:

* [Trellis](https://roots.io/trellis/docs/installing-trellis/)
* [MAMP](https://www.mamp.info)
* [XAMPP](https://www.apachefriends.org/index.html)
* [Homestead](https://laravel.com/docs/5.6/homestead)

### 1. Clone the git repo
```
git clone https://github.com/CNHCircleK/cnhcirclek.org.git
```

### 2. Install Composer dependencies

Change to the directory that was created from the clone.

```
composer install
```

Running this will install the dependencies that the website requires.

[**What is Composer?**](https://getcomposer.org/doc/00-intro.md)

### 3. Define environment variables

> Environment variables are values specific to the current running instance of the project. Having environment variables allows us adapt to different development environments and prevents us from committing secrets such as the database password.

```
cp .env.example .env
```

`.env.example` provides a template for your `.env`. The website will refer to `.env`. Notice that we do not commit the `.env` file and it its included in the `.gitignore`.

**Environment Variables**
  * `DB_NAME` - Database name
  * `DB_USER` - Database user
  * `DB_PASSWORD` - Database password
  * `DB_HOST` - Database host
  * `WP_ENV` - Set to environment (`development`, `staging`, `production`)
  * `WP_HOME` - Full URL to WordPress home (http://example.com)
  * `WP_SITEURL` - Full URL to WordPress including subdirectory (http://example.com/wp)
  * `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT` - Generate with [wp-cli-dotenv-command](https://github.com/aaemnnosttv/wp-cli-dotenv-command) or from the [WordPress Salt Generator](https://api.wordpress.org/secret-key/1.1/salt/)

### 4. Configure your virtual host

Set your site vhost document root to `/path/to/site/web/`. For instance, `/Users/John/cnhcirclek.org/web`.

### 5. Build the theme

Go to the CNH theme directory.

**Example:**
```
cd web/app/themes/cnh
```

Build the assets.

```
gulp build
```

> Gulp is a task runner that helps us compile and build the assets for the website.

> The website needs to be built because the styles are actually written in [SCSS](https://sass-lang.com)

Refer to the [Frontend Development](#frontend-development) section for more commands.

### 6. Access admin panel

Access the admin panel at `http://example.com/wp/wp-admin`

### 7. Set up pages and other content

Some of the pages on the website are defined using page templates in the [CNH theme](/web/app/themes/cnh). You'll have to create pages with specific slugs to access them and develop, if necessary.

Pages:
* `dcon` - [`page-dcon.twig`](/web/app/themes/cnh/templates/page-dcon.twig)
* `knowdboard` - [`page-knowdboard.twig`](/web/app/themes/cnh/templates/page-knowdboard.twig)

You may have to recreate other content as well.

## Development

### Frontend Development
For more information, visit the [theme's README](/web/app/themes/cnh/README.md)

#### `.twig` Templates
The templates use [Timber](https://www.upstatement.com/timber/) for a cleaner development experience.

#### Gulp commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp --production` — Compile assets for production (no source maps).
