<?php

use Illuminate\Database\Seeder;
use App\Profesor;

class ProfesorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        Profesor::create([
            'nombre' => 'david',
            'apellido' => 'Aguada'
        ]);
        Profesor::create([
            'nombre' => 'jorge',
            'apellido' => 'Lopez'
        ]);
        Profesor::create([
            'nombre' => 'luis',
            'apellido' => 'Garcia'
        ]);
        Profesor::create([
            'nombre' => 'fernando',
            'apellido' => 'Gonzales'
        ]);
    }
}
