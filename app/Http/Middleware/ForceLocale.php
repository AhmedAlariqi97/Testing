<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Redirect;

// use Illuminate\Support\Facades\Request;

class ForceLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);

        // $headers = getallheaders();

        if (!in_array($locale, ['ar', 'en'])) {
            $locale = 'ar';
            // LaravelLocalization::setLocale('ar');

            App::setLocale($locale);
            return Redirect::to(LaravelLocalization::getLocalizedURL(App::getLocale(), $request->url()));
        }

        return $next($request);
    }
}
