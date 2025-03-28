<?php

namespace App\Http\Controllers;

use App\Models\Dia;
use App\Models\Horario;
use App\Models\Materia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // ~ Metodo de vista principal
    public function index(){
        return view('home');
    }

    // ~ Metodo controlador de vista de las materias por dia
    public function dia($dia)
    {
        $diaModel = Dia::where('nombre', $dia)->firstOrFail();

        $materias = Horario::with(['materia', 'entrada', 'salida', 'salon.edificio'])
            ->where('id_dia', $diaModel->id)
            ->get()
            ->sortBy(function ($horario) {
                return $horario->entrada->hora;
            });

        return view('dia', compact('dia', 'materias'));
    }

    // ~ Metodo controlador de la vista de detalles de una materia segun el dia
    public function materia($dia, $slug)
    {
        $horario = Horario::with([
            'materia',
            'entrada',
            'salida',
            'salon' => function ($query) {
                $query->with('edificio');
            }
        ])
            ->whereHas('dia', function ($q) use ($dia) {
                $q->where('nombre', $dia);
            })
            ->whereHas('materia', function ($q) use ($slug) {
                $q->where('slug', $slug);
            })
            ->firstOrFail();

        return view('materia', [
            'dia' => $dia,
            'horario' => $horario
        ]);
    }
}
