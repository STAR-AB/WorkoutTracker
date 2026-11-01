<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;

Route::resource('/workouts', WorkoutController::class);
