<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([

            [
                'name' => 'crear_rol',
                'display_name' => 'Crear Role',
                'description' => '1',
            ],
            [
                'name' => 'crear-permiso',
                'display_name' => 'Crear Permiso',
                'description' => '2',
            ],
            [
                'name' => 'crear-planes-ofertas',
                'display_name' => 'Crear nuevos planes y servicios',
                'description' => '3',
            ],
            [
                'name' => 'eliminar-usuarios',
                'display_name' => 'Eliminar Usuarios',
                'description' => '3',
            ],
        ]);
    }
}
