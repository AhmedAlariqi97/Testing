<?php

use App\Http\Controllers\ContactMessages\ContactMessageController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Posts\PostController;
use App\Http\Controllers\Subscribers\SubscriberController;
use App\Http\Controllers\Programs\ProgramController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Guides\GuideController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontController::class, 'index'])->name("front.home")->middleware('ForceLocale');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['ForceLocale', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],

    ],
    function () {

        Route::get('/', [FrontController::class, 'index'])->name("front.home");

    }
);
