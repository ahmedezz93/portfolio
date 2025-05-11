<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\ArticlesController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\ContactUsController;
use App\Http\Controllers\admin\FaqsController;
use App\Http\Controllers\admin\FaqSectionSectionsController;
use App\Http\Controllers\admin\homeController;
use App\Http\Controllers\admin\OurPartnersController;
use App\Http\Controllers\admin\PointAboutUsController;
use App\Http\Controllers\admin\ProjectInfoController;
use App\Http\Controllers\admin\ProjectsController;
use App\Http\Controllers\admin\SectionsFaqsController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\admin\ServicesDetailsController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\TeamsController;
use App\Http\Controllers\admin\UsersController;
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
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/store/login', [AuthController::class, 'storeLogin'])->name('login');

        Route::prefix('admin')->middleware('auth:web')->group(function () {

            //Users
            Route::resource('users', UsersController::class);
            Route::post('users/destroy_all', [UsersController::class, 'destroyAll'])->name('users.destroy.all');

            //Auth
            Route::post('/logout', [AuthController::class, 'logout'])
                ->name('logout');
            Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
                Route::get('create', [SettingsController::class, 'create'])->name('create');
                Route::post('store', [SettingsController::class, 'store'])->name('store');
            });

            //home
            Route::group(['prefix' => 'home', 'as' => 'home.'], function () {
                Route::get('create', [homeController::class, 'create'])->name('create');
                Route::post('updateOrCreate', [homeController::class, 'updateOrCreate'])->name('updateOrCreate');
            });
            //Services
            Route::resource('services', ServicesController::class);
            Route::post('services/destroy_all', [ServicesController::class, 'destroyAll'])->name('services.destroy.all');

            //projects
            Route::resource('projects', ProjectsController::class);
            Route::post('projects/destroy_all', [ProjectsController::class, 'destroyAll'])->name('projects.destroy.all');

            //articles

            Route::resource('articles', ArticlesController::class);
            Route::post('articles/destroy_all', [ArticlesController::class, 'destroyAll'])->name('articles.destroy.all');

            // faqs
            Route::prefix('faqs')->as('faqs.')->controller(FaqsController::class)->group(function () {
                Route::get('index/{id}', 'index')->name('index');
                Route::get('create/{id}', 'create')->name('create');
                Route::post('store/{id}', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                Route::post('update/{id}', 'update')->name('update');
                Route::post('destroy_all', 'destroyAll')->name('destroy.all');
                Route::delete('destroy/{id}', 'destroy')->name('destroy');
            });
            // sections faqs
            //   Route::prefix('sectionFaqs')->name('sectionFaqs.')->controller(SectionsFaqsController::class)->group(function () {
            //     Route::get('index/', 'index')->name('index');
            //     Route::get('create/', 'create')->name('create');
            //     Route::post('store/', 'store')->name('store');
            //     Route::get('edit/{id}', 'edit')->name('edit');
            //     Route::post('update/{id}', 'update')->name('update');
            //     Route::post('destroy_all', 'destroyAll')->name('destroy.all');
            //     Route::delete('destroy/{id}', 'destroy')->name('destroy');
            // });
            Route::resource('sectionFaqs', SectionsFaqsController::class);
            Route::post('sectionFaqs/destroy_all', [SectionsFaqsController::class, 'destroyAll'])->name('sectionFaqs.destroy.all');


            Route::resource('teams', TeamsController::class);
            Route::post('teams/destroy_all', [TeamsController::class, 'destroyAll'])->name('teams.destroy.all');

            Route::prefix('contacts')->as('contacts.')->controller(ContactUsController::class)->group(function () {
                Route::get('index/', 'index')->name('index');
                Route::post('destroy_all', 'destroyAll')->name('destroy.all');
                Route::delete('destroy/{id}', 'destroy')->name('destroy');
            });


            Route::prefix('about')->as('about.')->controller(AboutController::class)->group(function () {
                Route::get('index/', 'index')->name('index');
                Route::get('create/', 'create')->name('create');
                Route::post('store/', 'store')->name('store');
                Route::get('edit/{id}', 'edit')->name('edit');
                // Route::post('update/{id}', 'update')->name('update');
                Route::post('destroy_all', 'destroyAll')->name('destroy.all');
                Route::delete('destroy/{id}', 'destroy')->name('destroy');
            });

            Route::resource('points', PointAboutUsController::class);
            Route::post('points/destroy_all', [PointAboutUsController::class, 'destroyAll'])->name('points.destroy.all');
        });
    }
);
