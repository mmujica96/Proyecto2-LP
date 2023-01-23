<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\perfilPsicologoController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [LoginController::class,'create'])->name('login.index');
Route::get('/profile', [ProfileController::class,'create'])->name('profile.index');
Route::get('/perfilPsicologo', [perfilPsicologoController::class,'create'])->name('perfilPsicologo.index');
