<?php

use Illuminate\Database\Seeder;

class MedidaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medidas')->insert([
            'medida' => '7.6*3.4',
            'costo' => 290.2558108,
        ]);
        DB::table('medidas')->insert([
            'medida' => '7.6*4.9',
            'costo' => 296.7278921,
        ]);
    }
}