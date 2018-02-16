<?php

namespace App\Providers;

use App\Category;
use Carbon\Carbon;
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
        Carbon::setLocale('es');

        view()->composer('frontend.layouts.nav', function ($view) {
            $view->with('categories', Category::primary());
        });

        view()->composer('frontend.layouts.sidebar', function ($view) {
            $view->with('categories', Category::active());
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
