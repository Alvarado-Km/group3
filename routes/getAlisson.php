<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('products', function () {
    return view('products.index', [
        'products' => Product::all(),
        'SALUDO' => 'holaaaaa'
    ]);
});

Route::get('/products/create', function () {
    return view('products.create');
});
