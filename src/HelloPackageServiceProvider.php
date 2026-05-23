<?php

namespace Darshan\HelloPackage;

use Illuminate\Support\ServiceProvider;

class HelloPackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Load Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Load Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'hello-package');

        // Publish Config
        $this->publishes([
            __DIR__.'/../config/hello.php' => config_path('hello.php'),
        ], 'hello-config');

        // Merge Config
        $this->mergeConfigFrom(
            __DIR__.'/../config/hello.php',
            'hello'
        );
    }

    public function register(): void
    {
        //
    }
}