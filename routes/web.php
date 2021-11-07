<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});

// Note two different ways to refer to the controller
// if you use the first one below you must have the use(see above) to indicate where that controller resides
Route::get('/login', [LoginController::class, 'login']);

Route::get('about', 'App\Http\Controllers\AboutController@about');

// now alter register so it calls the resister controller, and that then calls the correct view
Route::get('register', function () {
    return view('register');
});


