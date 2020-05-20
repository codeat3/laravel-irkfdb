<?php

namespace Codeat3\LaravelIrkfdb;

use Illuminate\Support\ServiceProvider;

class LaravelIrkfdbServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-irkfdb.php'),
            ], 'irkfdb-config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-irkfdb');

        // Register the main class to use with the facade
        $this->app->singleton('laravel-irkfdb', function () {
            return new LaravelIrkfdb;
        });
    }
}
