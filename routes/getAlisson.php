<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/products/create', function () {
    return view('products.create');
});

Route::get('/products/index', function () {
    return view('products.index');
});





