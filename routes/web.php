<?php

use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\AdminController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\User\UserPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


// USER ROUTES
Route::group(['prefix' => 'user', 'namespace' => 'User', 'as' => 'user.'], function () {
    Auth::routes();

    Route::middleware('auth:user')->group( function () {
        Route::get('/home', [UserPageController::class, 'home'])->name('home');
    });
    // Add other user routes here
});

// ADMIN ROUTES

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    Auth::routes();

    Route::middleware('auth:admin')->group( function () {
        Route::get('/home', [PageController::class, 'home'])->name('home');
        Route::get('/products/create', [PageController::class, 'create'])->name('products.create');
        Route::post('/products/save', [PageController::class, 'save'])->name('products.save');
    });
    
});

