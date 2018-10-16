<?php

namespace Gr8devofficial\LaravelFreecassa;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $configPath = __DIR__ . '/../config/freekassa.php';
        $this->mergeConfigFrom($configPath, 'freekassa');
    }
}