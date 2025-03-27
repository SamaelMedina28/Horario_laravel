<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    //
    public $table = 'salones';
    protected $fillable = ['id_edificio', 'nombre'];

    // ! Hago una relacion inversa con la tabla de edificios
    public function edificio()
    {
        return $this->belongsTo(Edificio::class, 'id_edificio');
    }
}
