<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TesteUmProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\TesteContract',
            'App\Services\TesteService'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
