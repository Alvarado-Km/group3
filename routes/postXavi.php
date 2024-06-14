<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [UserController::class, 'login']);
Route::post('/signup', [UserController::class, 'signup']);
Route::post('/Products/create', [ProductController::class, 'create']);

Route::delete('/product/{product}', [ProductController::class, 'destroy']);
