<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    $person = [
        'name'=> 'John',
        'email'=> 'john@testmail.com',
    ];
    dd($person);  
    return view('welcome');
});

Route::view('/about', 'about');

Route::get('/product/{id}', function (string $id) {
    return "Product ID = $id";
})->whereNumber("id");

Route::get("product/category/{category?}", function (string $category = null) {
    return "Product for category= $category";
});

Route::get("/user/{username}", function (string $username) {
    return "username is $username";
})->where('username', '[a-z]+');


Route::get('/car', [CarController::class,'index']);
