<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SignupController;

Route::get('/', function () {
    return view('index');
});

Route::prefix('auth')->group(function () {
    Route::get('/signup', [SignupController::class, 'index']);
});
