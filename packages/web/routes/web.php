<?php

use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\Dashboard\StoreController;
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

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/store/create', [StoreController::class, 'create'])->name('store.create');
});
