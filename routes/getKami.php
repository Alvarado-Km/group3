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

Route::get('/products/product', function(){
    return view('products.product');
});


Route::get('/AboutUs', function () {
    return view('AboutUs');
});

Route::get('/PruebaKami', function () {
    return view('PruebaKami');
});

Route::get('/products/joyeria', function(){
    return view('products.Joyeria');
});

Route::get('/products/ropa', function(){
    return view('products.ropa');
});

Route::get('/products/dulces', function(){
    return view('products.dulces');
});

Route::get('/products/ceramica', function(){
    return view('products.ceramica');
});

Route::get('/products/instrumentos', function(){
    return view('products.instrumentos');
});

Route::get('/products/muebles', function(){
    return view('products.muebles');
});

Route::get('/products/velas', function(){
    return view('products.velas');
});

Route::get('/products/vidrios', function(){
    return view('products.vidrios');
});
