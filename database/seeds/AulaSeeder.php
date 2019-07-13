<?php

use Illuminate\Database\Seeder;
use App\Aula;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Aula::create([
            'edificio_id'=>1,
            'nombre'=>'UNI9',
            'piso'=>0,
            'estado'=>'disponible'

            ]);
            Aula::create([
                'edificio_id'=>1,
                'nombre'=>'UNI21',
                'piso'=>0,
                'estado'=>'disponible'
    
                ]);
                Aula::create([
                    'edificio_id'=>1,
                    'nombre'=>'UNI2',
                    'piso'=>1,
                    'estado'=>'disponible'
        
                    ]);
                    Aula::create([
                        'edificio_id'=>2,
                        'nombre'=>'SAV25',
                        'piso'=>0,
                        'estado'=>'disponible'
            
                        ]);
    }
}
