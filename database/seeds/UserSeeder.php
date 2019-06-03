<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'name' => 'admin',
                'email' => 'admin@mail.com',
                'password' => bcrypt('123456*'),
            ],
            [
                'name' => 'invitado',
                'email' => 'invitado@mail.com',
                'password' => bcrypt('123456'),
            ],
        ]);
    }
}
