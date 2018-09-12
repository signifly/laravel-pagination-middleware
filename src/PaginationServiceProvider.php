<?php

namespace Signifly\Pagination;

use Illuminate\Http\Request;
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

        Request::macro('paginationCount', function ($key = null) {
            $defaultCount = config('pagination.defaultCount');
            $maximumCount = config('pagination.maximumCount');
            $paginationKey = $key ?? config('pagination.key');

            return min(
                intval($this->query($paginationKey, $defaultCount)),
                $maximumCount
            );
        });
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
