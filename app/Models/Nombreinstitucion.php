<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nombreinstitucion extends Model
{
    use HasFactory;
    //Creando un arreglo
    protected $fillable = [ 'COD_MOD',
                            'IE_NOMBRE'
                        ];
    public $timestamps = false;

    // public function usuariotitulados(){
    //     return $this->hasMany(Usuariotitulado::class, 'id');
    // }
}
