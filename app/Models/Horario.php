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
        'id_entrada',  // Columna en la tabla horarios
        'id_salida'    // Columna en la tabla horarios
    ];

    // Relación con entrada (sin cambiar el nombre)
    public function entrada()
    {
        return $this->belongsTo(Entrada::class, 'id_entrada');
    }

    // Relación con salida (sin cambiar el nombre)
    public function salida()
    {
        return $this->belongsTo(Salida::class, 'id_salida');
    }

    // Resto de relaciones...
    public function dia()
    {
        return $this->belongsTo(Dia::class, 'id_dia');
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'id_materia');
    }

    public function salon()
    {
        return $this->belongsTo(Salon::class, 'id_salon');
    }
}
