<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::get('/login', 'login_index')->name('login.index');
    Route::post('/login', 'login')->name('login');
    Route::get('/register', 'register_index')->name('register.index');
    Route::post('/register', 'register')->name('register');
});


Route::group(['middleware' => ['auth']], function () {
    Route::controller(IndexController::class)->group(function () {
        Route::get('/', 'index')->name('index');

    });

    Route::controller(LessonController::class)->prefix('lesson')->name('lesson.')
        ->group(function () {
            Route::get('/', 'index')->name('index');


            Route::get('/add', 'add_index')->name('add.index');
            Route::post('/add', 'add')->name('add');

            Route::get('/{slug}', 'content')->name('content');
            Route::post('/{slug}/send', 'add_content')->name('content.add');


            Route::get('/{slug}/follow', 'follow')->name('content.follow');
            Route::get('/{slug}/unfollow', 'unfollow')->name('content.unfollow');

            Route::post('/{slug}/status', 'status')->name('status');
        });

    Route::controller(UserController::class)->prefix('user')->name('user.')
        ->group(function () {

            Route::get('/', 'index')->name('index');
            Route::post('/update', 'update')->name('update');
        });


    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('image/upload', [HelperController::class, 'upload'])->name('image.upload');
    Route::post('image/upload2', [HelperController::class, 'upload2'])->name('image.upload2');

});



