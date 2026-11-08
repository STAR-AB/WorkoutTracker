<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;


// Route::get('/', function () {
//     return view('welcome', ['person' => request('person', "Guest")]);
// });
Route::get('/', function () {
    return view('welcome', [
        'person' => request('person', "Guest"),
        'tasks' => ['Go to the store', 'Finish my screencast', 'Clean the house']
    ]);
});

Route::resource('users', UserController::class);
Route::resource('workouts', WorkoutController::class);
Route::view('/contactUs', 'contactUs', ['title' => 'Contact Us']);

