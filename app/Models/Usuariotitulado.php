<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuariotitulado extends Model
{
    use HasFactory;
    //Creando un arreglo
    protected $fillable = [ 'nombreinstitucion_id',
                            'APE_PAT',
                            'APE_MAT', 
                            'NOMBRES',
                            'DOCU_TIP',
                            'DOCU_NUM',
                            'NUM_TITU',
                            'NOMBRE_TITU',
                            'nivelformacion_id',
                            'TITU_FEC',
                            'REG_TITU_NUM',
                            'RESO_TITU_NUM',
                            'REG_TITU_FEC', 
                            'REG_TITU_LIBRO',
                            'FOLIO_TITU_NUM',
                            'usuarioadministrativo_idDIR',
                            'usuarioadministrativo_idSA',
                            'usuarioadministrativo_idSG',
                            'usuarioadministrativo_idRAC'
                        ];
    public $timestamps = false;
    
    //lo ocupamos para mostrar los nombres completos de tablas relicionales y no el ID
    public function nombreinstitucion(){
        return $this->belongsTo(Nombreinstitucion::class, 'nombreinstitucion_id');
    }

    public function nivelformacion(){
        return $this->belongsTo(Nivelformacion::class, 'nivelformacion_id');
    }

    public function usuarioadministrativoDIR(){
        return $this->belongsTo(Usuarioadministrativo::class, 'usuarioadministrativo_idDIR');
    }

    public function usuarioadministrativoSA(){
        return $this->belongsTo(Usuarioadministrativo::class, 'usuarioadministrativo_idSA');
    }

    public function usuarioadministrativoSG(){
        return $this->belongsTo(Usuarioadministrativo::class, 'usuarioadministrativo_idSG');
    }

    public function usuarioadministrativoRAC(){
        return $this->belongsTo(Usuarioadministrativo::class, 'usuarioadministrativo_idRAC');
    }

}
