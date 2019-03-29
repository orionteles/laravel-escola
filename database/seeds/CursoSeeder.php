<?php

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursos')->insert([
            ['nome'=>'ADS', 'duracao'=>5],
            ['nome'=>'Direito', 'duracao'=>10],
            ['nome'=>'Redes', 'duracao'=>5],
            ['nome'=>'Enfermagem', 'duracao'=>8],
            ['nome'=>'Segurança da Informação', 'duracao'=>5],
            ['nome'=>'Administração', 'duracao'=>8],
            ['nome'=>'Jogos Digitais', 'duracao'=>8],
        ]);
    }
}