<?php

use Illuminate\Database\Seeder;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([
            ['nome'=>'Brasília', 'uf_id'=>7],
            ['nome'=>'Goiânia', 'uf_id'=>9],
            ['nome'=>'Anápolis', 'uf_id'=>9],
        ]);
    }
}
