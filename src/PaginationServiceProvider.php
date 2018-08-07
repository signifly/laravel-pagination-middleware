<?php

namespace Signifly\Shopify\Laravel;

use Illuminate\Support\ServiceProvider;

class PaginationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/pagination.php' => config_path('pagination.php'),
        ], 'pagination');

        $this->mergeConfigFrom(__DIR__.'/../config/pagination.php', 'pagination');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
