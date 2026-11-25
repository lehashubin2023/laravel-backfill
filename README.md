<div align="center">
    <h1>Laravel Backfill</h1>
</div>

<p align="center">
    <a href="https://packagist.org/packages/shubin/laravel-backfill"><img src="https://img.shields.io/packagist/v/shubin/laravel-backfill.svg?style=flat-square" alt="Packagist"></a>
    <a href="https://packagist.org/packages/shubin/laravel-backfill"><img src="https://img.shields.io/packagist/php-v/shubin/laravel-backfill.svg?style=flat-square" alt="PHP from Packagist"></a>
    <a href="https://packagist.org/packages/shubin/laravel-backfill"><img src="https://badge.laravel.cloud/badge/shubin/laravel-backfill?style=flat" alt="Laravel versions"></a>
    <a href="https://github.com/shubin/laravel-backfill/actions"><img alt="GitHub Workflow Status (main)" src="https://img.shields.io/github/actions/workflow/status/shubin/laravel-backfill/tests.yml?branch=main&label=Tests&style=flat-square"></a>
    <a href="https://packagist.org/packages/shubin/laravel-backfill"><img src="https://img.shields.io/packagist/dt/shubin/laravel-backfill.svg?style=flat-square" alt="Total Downloads"></a>
</p>

Laravel Backfill

## Installation

You can install the package via Composer:

```bash
composer require shubin/laravel-backfill
```

You may publish all of the package's resources at once:

```bash
php artisan vendor:publish --tag="laravel-backfill"
```

Or, you may publish each resource individually:

### Publishing the Configuration File

```bash
php artisan vendor:publish --tag="laravel-backfill-config"
```

### Publishing and Running the Migrations

```bash
php artisan vendor:publish --tag="laravel-backfill-migrations"
php artisan migrate
```

### Publishing the Views

```bash
php artisan vendor:publish --tag="laravel-backfill-views"
```

### Publishing the Translations

```bash
php artisan vendor:publish --tag="laravel-backfill-lang"
```

### Publishing the Public Assets

```bash
php artisan vendor:publish --tag="laravel-backfill-assets"
```

## Usage

<!-- Add a basic usage example here. -->

## Contributing

Thank you for considering contributing to Laravel Backfill! Please review our [contributing guide](.github/CONTRIBUTING.md) to get started.

## Credits

- [Aleksey Shubin](https://github.com/shubin)
- [All Contributors](../../contributors)

## License

Laravel Backfill is open-sourced software licensed under the [MIT license](LICENSE.md).
