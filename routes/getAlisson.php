<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('products', function () {
    return view('products.index', [
        'productos' => Product::with('category')->get(),
    ]);
});

Route::get('/products/create', function () {
    return view('products.create');
});

Route::get('/products/index', function () {
    return view('products.index');
});



