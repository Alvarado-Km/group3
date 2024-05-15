<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup',[UserController::class, 'signup']);

Route::get('/login', function (){
    return view('login');
});
Route::post('/login', [UserController::class, 'login']);

