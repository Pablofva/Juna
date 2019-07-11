<?php

use Illuminate\Database\Seeder;
use App\Carrera;
use App\Materia;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $carreraId=Carrera::where('nombre','INFORMATICA')->value('id');
        Materia::create([
            'carrera_id'=>$carreraId,
            'nombre'=>'ALGORITMO Y PROGRAMACION',
            'desc_corta'=>'alypro',
            'anio'=>'1',
            'cod_materia'=>'1555'
            ]);
        Materia::create([
                'carrera_id'=>$carreraId,
                'nombre'=>'COMPLEJIDAD TEMPORAL ALGORITMOS Y ESTRUCTURA',
                'desc_corta'=>'alypro',
                'anio'=>'2',
                'cod_materia'=>'1555'
                ]);
                Materia::create([
                    'carrera_id'=>$carreraId,
                    'nombre'=>'SISTEMAS OPERATIVOS 1',
                    'desc_corta'=>'alypro',
                    'anio'=>'2',
                    'cod_materia'=>'1555'
                    ]);
    }
}
