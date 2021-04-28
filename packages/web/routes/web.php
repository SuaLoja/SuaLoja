<?php

use App\Http\Controllers\Auth\SigninController;
use App\Http\Controllers\Auth\SignoutController;
use App\Http\Controllers\Auth\SignupController;
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
    Route::get('/', [DashboardController::class, 'index']);
});
