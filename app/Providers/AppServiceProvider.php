<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\HeroObserver;
use App\Models\Hero;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Hero::observe(HeroObserver::class);
    }
}
