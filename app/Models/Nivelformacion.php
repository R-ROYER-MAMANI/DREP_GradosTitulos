<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivelformacion extends Model
{
    use HasFactory;
    //Creando un arreglo
    protected $fillable = [ 'FORMACION',
                        ];
    public $timestamps = false;
}
