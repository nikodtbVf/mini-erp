<?php

use Illuminate\Database\Seeder;

class BarrenoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barrenos')->insert([
            'tipo' => 'Ninguno',
            'costo' => 0,
        ]);
        DB::table('barrenos')->insert([
            'tipo' => 'Hasta 1/2',
            'costo' => 37.5,
        ]);
        DB::table('barrenos')->insert([
            'tipo' => 'Hasta 1 en la resistencia',
            'costo' => 50,
        ]);
        DB::table('barrenos')->insert([
            'tipo' => 'Saque en la resistencia',
            'costo' => 60,
        ]);
    }
}
