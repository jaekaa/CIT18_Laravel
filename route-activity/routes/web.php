<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// Root route
Route::get('/', function () {
    return ('Welcome to CodeSpace LARAVEL!');
});

// 1st route
Route::get('/salutations', function () {
    return 'Hello Laravel! Hope you’re having a productive day';
});

// 2nd route - Greet route
Route::get('/greet', [GreetController::class, 'greetShow']);