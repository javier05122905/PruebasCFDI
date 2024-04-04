<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pruebascontroller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('vista1',[pruebascontroller::class,'vista1'])->name('vista1');


Route::get('altamascotas',[mascotascontroller::class,'altamascotas'])->name('altamascotas');