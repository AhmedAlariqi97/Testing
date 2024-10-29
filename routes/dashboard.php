<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\ContentManagementController;
use App\Http\Controllers\ImageManagementController;
use App\Http\Controllers\SEOManagementController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ],
    function () { //...

        /**----------------------
         *    ContentManagement
         *------------------------**/

        Route::resource('content', ContentManagementController::class)->except(['create', 'show'])->missing(function (Request $request) {
            return  Redirect::route('content.index');
        });
        Route::post('content/activate/{contentManagement}', [ContentManagementController::class, 'activate'])->name('content.activate');

        /**----------------------
         *    ImageManagement
         *------------------------**/

        Route::resource('images', ImageManagementController::class)->except('show');


        /**----------------------
         *  SEO Management
         *------------------------**/
        Route::resource('SEOManagement', SEOManagementController::class);

        /**----------------------
         *  ContactMessages
         *------------------------**/
        Route::get('/contactMessages/read', [ContactMessageController::class, 'read'])->name('contactMessages.read');
        Route::resource('contactMessages', ContactMessageController::class)->except(['edit', 'update', 'store']);


    }

);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.attempt');
Auth::routes(['login' => false, 'register' => false]);
