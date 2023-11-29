<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

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

Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'index')->name('site.index');

    Route::controller(LoginController::class)->group(function () {
        Route::get('/login/teatcher', 'index')->name('login.index');
        Route::post('/login/loading', 'loginStore')->name('login.store');
        Route::post('/logout/', 'logout')->name('login.logout');
    });
    
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register/teatcher/', 'create')->name('register.create');
        Route::post('/register/save', 'registerStore')->name('register.store');
    });

    Route::controller(TeachersController::class)->group(function () {
        Route::get('/teacher/view-all', 'index')->name('teacher.index');
    });
});

