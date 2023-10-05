<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//Agregamos
//Spatie
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [
            //tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',
            //tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            //tabla blogs
            // 'ver-blog',
            // 'crear-blog',
            // 'editar-blog',
            // 'borrar-blog',
            //tabla usuario titulados
            'ver-usuariotitulado',
            'crear-usuariotitulado',
            'editar-usuariotitulado',
            'borrar-usuariotitulado',
            //tabla instituciones
            'ver-nombreinstitucion',
            'crear-nombreinstitucion',
            'editar-nombreinstitucion',
            'borrar-nombreinstitucion',
            //tabla Nivel de Formacion
            'ver-nivelformacion',
            'crear-nivelformacion',
            'editar-nivelformacion',
            'borrar-nivelformacion',
            //tabla Administrativos
            'ver-usuarioadministrativo',
            'crear-usuarioadministrativo',
            'editar-usuarioadministrativo',
            'borrar-usuarioadministrativo',
            //tabla Cargo Administrativos
            'ver-cargo',
            'crear-cargo',
            'editar-cargo',
            'borrar-cargo',
        ];
        foreach($permisos as $permiso){
            //Lo que aca indica es añadamos todo de permisos a la tabla Permission
            Permission::create(['name'=>$permiso]);
        }
    }
}
