<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\principalController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [LoginController::class,'create'])->name('login.index');
Route::get('/principal', [principalController::class,'show']);