<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DeviceServiceProvider extends ServiceProvider {

    /**
     * Register device application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('App\Custom\Device', 'App\Custom\MockDevice');
    }

}
