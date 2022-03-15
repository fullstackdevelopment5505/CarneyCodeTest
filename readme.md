# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.
# Code Test: Lumen

A simple Lumen app designed to provide a basic API for our code test.

### Quick start

1. Install PHP (7.2+) or use an environment like [Laravel Homestead](https://laravel.com/docs/6.x/homestead) or Docker (see below)

1. Install [composer](http://getcomposer.org/) and run `composer install` to install dependencies

1. Copy the `.env.example` file to `.env` and set a random string for `APP_KEY`

1. Run `touch database/database.sqlite` to create a development database

1. Run `php artisan migrate` to migrate your development database

1. Run `php artisan db:seed` to seed your development database

1. Run `php -S localhost:3000 -t public` to start up the local development server

You should get JSON output from http://localhost:3000/members

### Testing

Run `vendor/bin/phpunit tests` to run the test suite.

### Docker

As an alternative to installing PHP directly, you can use the Docker files provided by [Laradock](https://laradock.io) to run the app and test suite.

> When cloning the project, use the `--recurse-submodules` flag to pull down the Laradock submodule

1. `cd laradock`

1. `cp .env-example .env`

1. Change `NGINX_HOST_HTTP_PORT` to `3000`, `WORKSPACE_BROWSERSYNC_HOST_PORT` to `4000` and `WORKSPACE_BROWSERSYNC_UI_HOST_PORT` to `4001`

1. `docker-compose up -d nginx`

> Note: This could take a few minutes on the initial build

Then connect to the Docker container using `docker-compose exec workspace bash` to run the setup tasks above.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
