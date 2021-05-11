<?php

use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Auth\SignoutController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\Dashboard\ProductsController;
use App\Http\Controllers\Dashboard\SettingsController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('auth')->middleware(['guest'])->group(function () {
    Route::get('/signup', [SignupController::class, 'index'])->name('auth.signup');
    Route::post('/signup', [SignupController::class, 'store']);

    Route::get('/signin', [SigninController::class, 'index'])->name('auth.signin');
    Route::post('/signin', [SigninController::class, 'store']);
});

Route::prefix('auth')->middleware(['auth'])->group(function () {
    Route::post('/signout', [SignoutController::class, 'store'])->name('auth.signout');
});

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('products')->group(function () {
        Route::get('/', [ProductsController::class, 'index'])->name('dashboard.products');

        Route::get('/create', [ProductsController::class, 'create'])->name('dashboard.products.create');
        Route::post('/create', [ProductsController::class, 'store']);

        Route::get('/edit/{product}', [ProductsController::class, 'edit'])->name('dashboard.products.edit');
        Route::put('/edit/{product}', [ProductsController::class, 'update']);

        Route::delete('/delete/{product}', [ProductsController::class, 'destroy'])->name('dashboard.products.delete');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoriesController::class, 'index'])->name('dashboard.categories');

        Route::get('/create', [CategoriesController::class, 'create'])->name('dashboard.categories.create');
        Route::post('/create', [CategoriesController::class, 'store']);

        Route::get('/edit/{category}', [CategoriesController::class, 'edit'])->name('dashboard.categories.edit');
        Route::put('/edit/{category}', [CategoriesController::class, 'update']);

        Route::delete('/delete/{category}', [CategoriesController::class, 'destroy'])->name('dashboard.categories.delete');
    });

    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('dashboard.settings');
        Route::post('/', [SettingsController::class, 'store']);
    });
});
