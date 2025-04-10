<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    public $table = 'salones';
    protected $fillable = ['nombre', 'edificio_id'];

    public function edificio()
    {
        return $this->belongsTo(Edificio::class, 'edificio_id');
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class , 'id_salon');
    }
}
