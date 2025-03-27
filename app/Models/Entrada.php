<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    //
    public $table = 'entradas';
    public $fillable = ['hora'];
}
