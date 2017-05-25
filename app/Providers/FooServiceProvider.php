<?php

namespace App\Providers;

use App\Foo;
use Illuminate\Support\ServiceProvider;

class FooServiceProvider extends ServiceProvider
{

    public $defer = true;

    public function provides()
    {
        return [Foo::class];
    }

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
        $this->app->singleton(Foo::class, function ($app) {
            return new Foo($app);
        });
    }
}
