<?php

namespace App\Providers;

use App\Models\PlatoIntro;
use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        View::composer('layouts.app', function ($view) {
            $view->with('services', Service::all()->translate('locale', app()->getLocale()));
            $view->with('platoIntro',PlatoIntro::all()->translate('locale', app()->getLocale()));
        });
    }
}
