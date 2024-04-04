<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pruebascontroller;
use App\Http\Controllers\CFDIController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('vista1',[pruebascontroller::class,'vista1'])->name('vista1');




Route::get('inicio', [CFDIController::class, 'inicio'])->name('inicio');
Route::GET('loginView', [CFDIController::class, 'loginView'])->name('loginView');
Route::POST('login', [CFDIController::class, 'login'])->name('login');
