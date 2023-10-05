<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;
    //Creando un arreglo
    protected $fillable = [ 'NOMBRE_CARGO',
                        ];
    public $timestamps = false;

    // public function usuarioadministrativos(){
    //     return $this->belongsTo(Usuarioadministrativo::class, 'id');
    // }
}
