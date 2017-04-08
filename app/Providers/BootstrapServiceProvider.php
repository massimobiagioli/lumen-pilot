<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BootstrapServiceProvider extends ServiceProvider {

    public function boot() {
        $this->publishes([base_path('vendor/twbs/bootstrap/dist') => public_path('vendor/bootstrap')], 'public');
    }

}
