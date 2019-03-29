<?php

use Illuminate\Database\Seeder;

class DisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disciplinas')->insert([
            ['nome'=>'Web I', 'curso_id'=>1],
            ['nome'=>'Web II', 'curso_id'=>1],
            ['nome'=>'Programação para Dispositivos Móveis', 'curso_id'=>1],
            ['nome'=>'Direito Civil', 'curso_id'=>2],
            ['nome'=>'Direito Penal', 'curso_id'=>2],
            ['nome'=>'Direito Trabalhista', 'curso_id'=>2],
        ]);
    }
}
