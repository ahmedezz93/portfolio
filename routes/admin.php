<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\AboutMe\AchievementController;
use App\Http\Controllers\admin\AboutMe\EducationController;
use App\Http\Controllers\admin\AboutMe\ExperienceController;
use App\Http\Controllers\admin\AboutMe\SkillController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\ContactUsController;
use App\Http\Controllers\admin\homeController;
use App\Http\Controllers\admin\MyPortfolio\ProjectController;
use App\Http\Controllers\admin\SettingsController;
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
            //experiences
            Route::resource('experiences', ExperienceController::class);
            Route::post('experiences/destroy_all', [ExperienceController::class, 'destroyAll'])->name('experiences.destroy.all');

            //educations
            Route::resource('educations', EducationController::class);
            Route::post('educations/destroy_all', [EducationController::class, 'destroyAll'])->name('educations.destroy.all');

            //skills
            Route::resource('skills', SkillController::class);
            Route::post('skills/destroy_all', [SkillController::class, 'destroyAll'])->name('skills.destroy.all');
            //achievements
            Route::resource('achievements', AchievementController::class);
            Route::post('achievements/destroy_all', [AchievementController::class, 'destroyAll'])->name('achievements.destroy.all');

            //projects
            Route::resource('projects', ProjectController::class);
            Route::post('projects/destroy_all', [ProjectController::class, 'destroyAll'])->name('projects.destroy.all');


            Route::prefix('contacts')->as('contacts.')->controller(ContactUsController::class)->group(function () {
                Route::get('index/', 'index')->name('index');
                Route::post('destroy_all', 'destroyAll')->name('destroy.all');
                Route::delete('destroy/{id}', 'destroy')->name('destroy');
            });



        });
    }
);
