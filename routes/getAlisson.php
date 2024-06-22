<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/products/create', function () {
    return view('products.create');
});

Route::get('/products/index', function () {
    return view('products.index');
});

Route::get('/products/ProfileArtisan', function () {
    return view('products.ProfileArtisan');
});

Route::get('/products/Profile', function () {
    return view('products.Profile');
});

Route::get('/products/Favorite', function () {
    return view('products.Favorite');
});

Route::get('/products/Shopping', function () {
    return view('products.Shopping');
});


