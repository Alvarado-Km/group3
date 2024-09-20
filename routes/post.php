<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/signup', [UserController::class, 'signup'])->name('signup');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/products/create', [ProductController::class, 'create']);
Route::post('/review/create', [])->name('create.review');

Route::delete('/product/{product}', [ProductController::class, 'destroy']);
