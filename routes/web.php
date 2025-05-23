<?php

use App\Http\Controllers\site\ContactUsController;
use App\Http\Controllers\site\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', HomeController::class)->name('home');

        Route::prefix('site')->group(function () {
            Route::prefix('contactUs')->name('contactUs.')->controller(ContactUsController::class)->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('sendMail', 'sendMail')->name('sendMail');
            });
        });
    }
);
