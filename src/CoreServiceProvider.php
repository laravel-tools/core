<?php

namespace LaravelTools\Core;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;
use LaravelTools\Core\Collections\Macros\Recursive;

/**
 * Class CoreServiceProvider handles the registration of the package.
 */
class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        Collection::macro(Recursive::NAME, app(Recursive::class)());
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Register services here
    }
}
