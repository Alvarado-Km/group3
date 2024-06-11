<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('users.login');
});

Route::get('/signup', function () {
    return view('users.signup');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/products/index', function (){
    return view('products.index');
});

Route::get('/products/product', function(){
    return view('products.product');
});
