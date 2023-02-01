<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\perfilPsicologoController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [LoginController::class,'create'])->name('login.index');
Route::get('/perfilPaciente', [ProfileController::class,'create'])->name('perfilPaciente.index');
Route::get('/perfilPsicologo', [perfilPsicologoController::class,'create'])->name('perfilPsicologo.index');
Route::get('/admin', [AdminController::class,'create'])->name('admin.index');
Route::get('/psicologos', [AdminController::class,'cargar'])->name('psic.cargar');
Route::post('/registro', [AdminController::class,'store'])->name('registro.store');
Route::put('/update/{id}', [AdminController::class,'update'])->name('registro.update');
Route::delete('/destroy/{id}', [AdminController::class,'destroy'])->name('registro.destroy');
