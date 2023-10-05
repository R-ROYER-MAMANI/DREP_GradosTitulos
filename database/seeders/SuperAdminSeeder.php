<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Añadimos
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $usuario = User::create([
        'name'=> 'Super Administrador',
        'email'=> 'admin@gmail.com',
        'password'=> bcrypt('123456789')
       ]);

       //Asignando un rol
       $rol = Role::create(['name'=>'Super Administrador']);
       $permisos = Permission::pluck('id', 'id')->all();
       $rol->syncPermissions($permisos);
       $usuario->assignRole([$rol->id]);
    }
}
