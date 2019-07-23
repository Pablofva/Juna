<?php

use Illuminate\Database\Seeder;
use App\Materia;
use App\Carrera;

class MateriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->ing_1erAnio_ingInfo();
        $this->ing_2doAnio_ingInfo();
        $this->ing_3erAnio_ingInfo();
        $this->ing_4toAnio_ingInfo();
        $this->ing_5toAnio_ingInfo();
    }

    protected function ing_1erAnio_ingInfo()
    {
        $lista = 
        [ 
            ['CI021', 'Taller de Ingeniería'],['CI009', 'Sistemas de Representación'],
            ['CI010','Fundamentos de Informática'],['CI012', 'Matemática I'],
        ];
        foreach ($lista as $item) 
        {
            Materia::create([
                'cod_materia' => $item[0],
                'nombre' => $item[1],
                'anio' => 1,
                'carrera_id' => 1,
            ]);
        }
    }
    protected function ing_2doAnio_ingInfo()
    {
        $lista =
            [
                ['CI022', 'Matemática II'],['I3001', 'Algoritmos y Programación'],
                ['I3002', 'Organización y Arquitectura de Computadoras'],
                ['I3003', 'Sistemas Operativos I '],['CI025', 'Física I'],
                ['CI026', 'Matemática III '],
                ['I3004', 'Complejidad Temporal, Estructuras de Datos y Algoritmos'],
                ['I3005', 'Bases de Datos I'],
                ['I3006', 'Redes de Computadoras I'],
            ];
        foreach ($lista as $item) {
            Materia::create([
                'cod_materia' => $item[0],
                'nombre' => $item[1],
                'anio' => 2,
                'carrera_id' => 1,
            ]);
        }
    }

    protected function ing_3erAnio_ingInfo()
    {
        $lista =
            [
                ['CI027', 'Física II'], ['I3007', 'Metodología de Programación I'],
                ['I3008', 'Información y Comunicaciones'], ['I3009', 'Ingeniería de Software I '],
                ['I3010', 'Redes de Computadoras II'],['CI029', 'Probabilidad y Estadística'],
                ['I3011', 'Proyecto Software'],['CI011', 'Química General'],
                ['I3012', 'Metodologías de Programación II'],['I3013', 'Seguridad de la Información '],
            ];
        foreach ($lista as $item) {
            Materia::create([
                'cod_materia' => $item[0],
                'nombre' => $item[1],
                'anio' => 3,
                'carrera_id' => 1,
            ]);
        }
    }

    protected function ing_4toAnio_ingInfo()
    {
        $lista =
            [
                ['I3014', 'Bases de Datos II'], ['I3015', 'Ingeniería de Software II'],
                ['I3016', 'Sistemas Operativos II'], ['I3017', 'Seguridad en Aplicaciones'],
                ['I3018', 'Aplicaciones Móviles'],['I3019', 'Administración de Proyectos '],
                ['I3020', 'Lenguajes Formales y Autómatas'],['I3021', 'Programación en Tiempo Real'],
                ['I3031', 'Optativa I '],['CI030', 'Ingeniería Ambiental'],
            ];
        foreach ($lista as $item) {
            Materia::create([
                'cod_materia' => $item[0],
                'nombre' => $item[1],
                'anio' => 4,
                'carrera_id' => 1,
            ]);
        }
    }
    protected function ing_5toAnio_ingInfo()
    {
        $lista =
            [
                ['I3023', 'Sistemas y Organizaciones'], ['I3027', 'Legislación y Ejercicio Profesional de la Informática'],
                ['I3032', 'Optativa II '], ['I3033', 'Optativa III '],
                ['CI031', 'Gestión de Recursos Humanos '],['CI035', 'Gestión de la Calidad, Higiene y Seguridad'],
                ['I3028', 'Economía'],['I3029', 'Práctica Profesional Supervisada']
            ];
        foreach ($lista as $item) {
            Materia::create([
                'cod_materia' => $item[0],
                'nombre' => $item[1],
                'anio' => 5,
                'carrera_id' => 1,
            ]);
        }
    }
}
