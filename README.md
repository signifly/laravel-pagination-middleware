# A pagination middleware for your Laravel app

[![Latest Version on Packagist](https://img.shields.io/packagist/v/signifly/laravel-pagination-middleware.svg?style=flat-square)](https://packagist.org/packages/signifly/laravel-pagination-middleware)
[![Build Status](https://img.shields.io/travis/signifly/laravel-pagination-middleware/master.svg?style=flat-square)](https://travis-ci.org/signifly/laravel-pagination-middleware)
[![StyleCI](https://styleci.io/repos/143860281/shield?branch=master)](https://styleci.io/repos/143860281)
[![Quality Score](https://img.shields.io/scrutinizer/g/signifly/laravel-pagination-middleware.svg?style=flat-square)](https://scrutinizer-ci.com/g/signifly/laravel-pagination-middleware)
[![Total Downloads](https://img.shields.io/packagist/dt/signifly/laravel-pagination-middleware.svg?style=flat-square)](https://packagist.org/packages/signifly/laravel-pagination-middleware)

The `signifly/laravel-pagination-middleware` package allows you to easily configure pagination default and max values in your Laravel app.

## Installation

You can install the package via composer:

```bash
$ composer require signifly/laravel-pagination-middleware
```

The package will automatically register itself.

Add the middleware to your `App\Http\Kernel.php` file:

```php
protected $routeMiddleware = [
    'pagination' => \Signifly\Pagination\Pagination::class,
];
```

Now you can apply the middleware to your routes or middleware groups.

You can publish the config by running:
```bash
$ php artisan vendor:publish --provider="Signifly\\Pagination\\PaginationServiceProvider"
```

## Testing
```bash
$ composer test
```

## Security

If you discover any security issues, please email dev@signifly.com instead of using the issue tracker.

## Credits

- [Morten Poul Jensen](https://github.com/pactode)
- [All contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
