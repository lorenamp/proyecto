<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeinscritionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeinscriptions')->insert([

            [
                'nombre' => 'Contrato a 12 meses',
                'codigo' => '12',
            ],
            [
                'nombre' => 'Contrato a 6 meses',
                'codigo' => '6',
            ],
            [
                'nombre' => 'Contrato semanal',
                'codigo' => '1',
            ],
        ]);

    }
}
