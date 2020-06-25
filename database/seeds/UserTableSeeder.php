<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Primeiro Usuário',
            'email' => 'email@email.com.br',
            'password' => bcrypt('123456')
        ]);
    }
}
