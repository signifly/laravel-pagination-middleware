# A pagination middleware for your Laravel app

The `signifly/laravel-pagination-middleware` package allows you to easily configure pagination min and max values in your Laravel app.

## Installation

You can install the package via composer:

```bash
$ composer require signifly/laravel-pagination-middleware
```

The package will automatically register itself.

Add the middleware to your `App\Http\Kernel.php` file:

```php
protected $routeMiddleware = [
    'pagination' => \App\Http\Middleware\Pagination::class,
];
```

Now you can apply the middleware to your routes or middleware groups.

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
