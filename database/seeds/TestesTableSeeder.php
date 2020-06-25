<?php

use Illuminate\Database\Seeder;

class TestesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('testes')->insert([
            'nome' => 'Html',
            'pontuacaoMinima' => 8
        ]);
    }
}
