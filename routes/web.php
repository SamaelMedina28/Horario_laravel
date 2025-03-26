<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/{dia}', function ($dia) {
    return view('dia', compact('dia'));
    // return 'El dia que ingresaste es ' . $dia;
});
Route::get('/{dia}/{materia}', function ($dia, $materia) {
    return view('materia', compact('dia', 'materia'));
    // return 'La materia ' . $materia . ' es del dia ' . $dia;
});
