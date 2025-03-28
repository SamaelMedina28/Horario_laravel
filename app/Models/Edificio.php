<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{
    //
    public $table = 'edificios';
    public $fillable = ['nombre'];
    public function salones()
    {
        return $this->hasMany(Salon::class);
    }
}
