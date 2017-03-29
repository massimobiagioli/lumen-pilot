<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider {

    /**
     * Register device application services.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('App\Custom\CrudRepository', 'App\Custom\DummyRepository');
    }

}
