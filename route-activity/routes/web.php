<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

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

// Task Resource Route
Route::resource('tasks', TaskController::class);