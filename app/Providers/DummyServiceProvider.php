<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Custom\DummyConnection;

class DummyServiceProvider extends ServiceProvider {
    
    /**
     * Register dummy application services.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('dummyconn', function ($app) {
            return new DummyConnection($app['App\Custom\Device']);
        });
    }
    
}
