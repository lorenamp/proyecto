<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TypeplanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('typeplans')->insert([

            [
                'nombre' => 'PLAN ACTIVE',
                'codigo' => '2',
            ],
            [
                'nombre' => 'PLAN FIT-TEAM',
                'codigo' => '3',
            ],
            [
                'nombre' => 'PLAN BLACK',
                'codigo' => '4',
            ],
        ]);
    }
}
