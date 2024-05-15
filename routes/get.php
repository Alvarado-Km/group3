<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [UserController::class, 'login']);


Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', [UserController::class, 'signup']);

Route::get('/prueba', function () {
    return view('prueba');
});

