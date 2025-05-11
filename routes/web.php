<?php

use App\Http\Controllers\admin\AboutMe\PersonalInfoController;
use App\Http\Controllers\site\HomeController;
use App\Http\Controllers\site\TeamsController;
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
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::get('/', HomeController::class)->name('home');

Route::prefix('site')->group(function () {
    Route::prefix('ourTeam')->name('ourTeam.')->controller(TeamsController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/createOrUpdate/{id}', 'createOrUpdate')->name('createOrUpdate');

    });

    Route::prefix('personalInfo')->name('personalInfo.')->controller(PersonalInfoController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/createOrUpdate/{id}', 'createOrUpdate')->name('createOrUpdate');

    });

});

    });
