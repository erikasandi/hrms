<?php

namespace App\Providers;

use App\Service\MenuService;
use App\Service\MetronicMenuGenerator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Service\MenuGenerator', function ($app) {
            return new MetronicMenuGenerator(new MenuService());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
