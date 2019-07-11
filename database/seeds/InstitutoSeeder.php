<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Instituto;

class InstitutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // OPCION NUMERO 1 DE INSERTAR 
        // DB::table('institutos')->insert([
        //     'nombre'=>'INGENIERIA',
        //     'color_hexa'=>'#2222'
        // ]);
        // OPCION NUMERO 2 ELOQUEN
        Instituto::create([
            'nombre'=>'INGENIERIA',
            'color_hexa'=>'#2222'
        ]);
        Instituto::create([
            'nombre'=>'SOCIALES',
            'color_hexa'=>'#2222'
        ]);
        Instituto::create([
            'nombre'=>'SALUD',
            'color_hexa'=>'#2222'
        ]);
        Instituto::create([
            'nombre'=>'ESTUDIOS INICIALES',
            'color_hexa'=>'#2222'
        ]);
        
    }
}
