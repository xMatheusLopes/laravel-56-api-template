<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TesteDoisProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Contracts\TesteDoisContract',
            'App\Services\TesteDoisService'
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
