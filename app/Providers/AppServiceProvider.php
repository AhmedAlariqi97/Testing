<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Spatie\Translatable\Facades\Translatable;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Translatable::fallback(
            fallbackAny: true,
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // App::setLocale('ar');
        // LaravelLocalization::getLocalizedURL('ar', null, [], true);


        Paginator::useBootstrap();
        Schema::defaultStringLength(191);
    }
}
