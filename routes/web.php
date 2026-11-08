<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\UserController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('users', UserController::class);
Route::resource('workouts', WorkoutController::class);
Route::get('contactUs', function () {
    return view('contactUs');
});

