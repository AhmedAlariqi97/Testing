<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Composers\FrontDataComposer;
use App\View\Composers\SEOSetupComposer;


class ShareDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(FrontDataComposer::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('front.*', FrontDataComposer::class);
        view()->composer(['front.home'], SEOSetupComposer::class);
    }
}
