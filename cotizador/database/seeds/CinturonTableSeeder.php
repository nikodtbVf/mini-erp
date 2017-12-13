<?php

use Illuminate\Database\Seeder;

class CinturonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cinturon')->insert([
            'nombre' => 'SIN CINTURON',
            'costo' => 0,
        ]);
        DB::table('cinturon')->insert([
            'nombre' => 'HASTA 6" DIAMETRO',
            'costo' => 52.5,
        ]);
        DB::table('cinturon')->insert([
            'nombre' => 'HASTA 12" DIAMETRO ',
            'costo' => 70,
        ]);
    }
}
