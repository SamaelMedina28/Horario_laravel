<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horarios';
    protected $fillable = [
        'id_dia',
        'id_materia',
        'id_salon',
        'id_entrada',
        'id_salida'
    ];

    // Relaciones
    // * Relaciona el horario con los dias
    public function dia()
    {
        return $this->belongsTo(Dia::class, 'id_dia');
    }

    //* Relaciona el horario con las materias
    public function materia()
    {
        return $this->belongsTo(Materia::class, 'id_materia');
    }

    //* Relaciona el horario con los salones
    public function salon()
    {
        return $this->belongsTo(Salon::class, 'id_salon');
    }

    //* Relaciona el horario con las horas de entrada
    public function entrada()
    {
        return $this->belongsTo(Entrada::class , 'id_entrada');
    }

    //* Relaciona el horario con las horas de salida
    public function salida()
    {
        return $this->belongsTo(Salida::class, 'id_salida');
    }
}
