<?php

namespace App\Providers;

use Illuminate\Routing\ResponseFactory;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * @param ResponseFactory $response
     */
    public function boot(ResponseFactory $response)
    {
        $response->macro('caps', function ($value) {
            //
        });

        view()->composer('view', function () {

        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
