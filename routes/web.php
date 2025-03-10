<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Auth;



Route::get('/', [CarController::class, 'index'])->name('home.index');

Route::post('/logout', function(){
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::resource('car', CarController::class);   

    Route::get('/car/search', [CarController::class, 'search'])->name('car.search');
    
    Route::get('/create', [CarController::class, 'create'])->name('create');
    Route::post('/create', [CarController::class, 'createNewCar'])->name('createNewCar');
    
});

Route::middleware('guest')->group(function () {
    Route::get('/signup', [SignupController::class, 'create'])->name('signup');
    
    Route::post('/signup', [SignupController::class, 'registerUser'])->name('registerUser');

    Route::get('/login', [LoginController::class, 'create'])->name('login');
    
    Route::post('/login', [LoginController::class, 'loginUser'])->name('loginUser');
});
