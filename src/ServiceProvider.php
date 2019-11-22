<?php

namespace Robstar\LaravelFlavourAddonDemo;

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Support\Str;

class ServiceProvider extends BaseServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom($this->configPath(), 'flavour');
    }

    /**
     * Publishes config, views, and routes to the application
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            $this->configPath() => config_path('flavour.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/views/flavour.blade.php'
                => resource_path('views/flavour.blade.php')
        ], 'views');

        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     *
     */
    protected function configPath()
    {
        return __DIR__ . '/../config/flavour.php';
    }

}
