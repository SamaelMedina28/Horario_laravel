<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // ~ Metodo de vista principal
    public function index(){
        return view('home');
    }

    // ~ Metodo controlador de vista de las materias por dia
    public function dia($dia){
        return view('dia',compact('dia'));
    }

    // ~ Metodo controlador de la vista de detalles de una materia segun el dia
    public function materia($dia,$materia){
        return view('materia',compact('dia','materia'));
    }
}
