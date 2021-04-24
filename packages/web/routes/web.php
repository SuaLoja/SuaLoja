<?php

use App\Http\Controllers\Auth\SigninController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SignupController;

Route::get('/', function () {
    return view('index');
});

Route::prefix('auth')->group(function () {
    Route::get('/signup', [SignupController::class, 'index'])->name('auth.signup');
    Route::post('/signup', [SignupController::class, 'store']);

    Route::get('/signin', [SigninController::class, 'index'])->name('auth.signin');
    Route::post('/signin', [SigninController::class, 'store']);
});
