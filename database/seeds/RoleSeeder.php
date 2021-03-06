<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([

            [
                'name' => 'admin',
                'display_name' => 'Administrador de sistema',
                'description' => '1',
            ],
            [
                'name' => 'invitado',
                'display_name' => 'Invitado',
                'description' => '2',
            ],
            [
                'name' => 'cliente',
                'display_name' => 'Cliente',
                'description' => '3',
            ],
        ]);
    }
}
