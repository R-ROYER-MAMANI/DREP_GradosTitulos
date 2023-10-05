<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarioadministrativo extends Model
{
    use HasFactory;
    //Creando un arreglo
    protected $fillable = [ 'NOMBRE',
                            'APE_P', 
                            'APE_M',
                            'DNI',
                            'cargo_id'
                            ];
    public $timestamps = false;

    //lo ocupamos para mostrar los nombres completos de tablas relicionales y no el ID
    public function cargo(){
        return $this->belongsTo(Cargo::class, 'cargo_id');
    }
}
