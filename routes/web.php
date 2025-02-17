<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;




Route::get('/', function(){
    return view('home.index');
});

Route::get('/car/search', [CarController::class, 'search'])->name('car.search');

Route::resource('car', CarController::class);

Route::get('/signup', [SignupController::class, 'create'])->name('signup');

Route::get('/login', [LoginController::class, 'create'])->name('login');
