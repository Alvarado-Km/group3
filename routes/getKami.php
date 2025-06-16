<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Product;

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

Route::get('/products/product/{product}', function(Product $product) {
    return view('products.product', [
        'producto' => $product
    ]);
});


Route::get('/AboutUs', function () {
    return view('AboutUs');
});

Route::get('/PruebaKami', function () {
    return view('PruebaKami');
});

Route::get('/products/joyeria', function(){
    return view('products.Joyeria', [
        'products' => Product::where('category_id', 1)->get()
    ]);
});

Route::get('/products/ropa', function(){
    return view('products.ropa', [
        'products' => Product::where( 'category_id', 2)->get()
     ]);
});

Route::get('/products/dulces', function(){
    return view('products.dulces', [
        'products' => Product::where( 'category_id', 12)->get()
    ]);
});

Route::get('/products/ceramica', function(){
    return view('products.ceramica', [
        'products' => Product::where( 'category_id', 6)->get()
    ]);
});

Route::get('/products/instrumentos', function(){
    return view('products.instrumentos', [
        'products' => Product::where( 'category_id', 9)->get()
    ]);
});

Route::get('/products/muebles', function(){
    return view('products.muebles', [
        'products' => Product::where( 'category_id', 4)->get()
    ]);
});

Route::get('/products/velas', function(){
    return view('products.velas', [
        'products' => Product::where( 'category_id', 3)->get()
    ]);
});

Route::get('/products/vidrios', function(){
    return view('products.vidrios', [
        'products' => Product::where( 'category_id', 11)->get()
    ]);
});

Route::get('/homepageArtisan', function(){
    return view('users.homepageArtisan');
});


Route::get('/ready', function(){
    return view('ready');
});

Route::get('/shopping', function () {
    return view('components.shopping');
});



Route::post('/logout', [UserController::class, 'logout']);
