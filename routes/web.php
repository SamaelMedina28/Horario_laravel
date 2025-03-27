<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class, 'index'])->name('home.index');

Route::get('/{dia}',[HomeController::class, 'dia'])->name('home.dia');

Route::get('/{dia}/{materia}',[HomeController::class, 'materia'])->name('home.materia');
