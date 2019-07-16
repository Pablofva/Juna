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
        //MATERIAS DE INGENIERIA
        $this->materiasIngenieriaInformatica();
        $this->materiasIngenieriaPetroleo();

        //MATERIAS DE SOCIALES
    }


    //MATERIAS DE ING EN INFORMATICA
    protected function materiasIngenieriaInformatica()
    {
        $id_carrera = Carrera::where('nombre', 'Ingenieria en Informatica')->value('id');

        $lista1 =
            [
                ['CI021', 'Taller de Ingeniería'], ['CI004', 'Prácticas Culturales'], 
                ['CI009', 'Sistemas de Representación'], ['CI002', 'Matemática'],
                ['CI001', 'Taller de Lectura y Escritura'], ['CI010', 'Fundamentos de Informática'],
                ['CI003', 'Problemas de Historia Argentina'],
                ['CI012', 'Matemática I'], 
            ];
        $this->crear_materias($lista1, 1, $id_carrera);

        $lista2 =
            [
                ['I3001', 'Algoritmos y Programación'],
                ['I3002', 'Organización y Arquitectura de Computadoras'],
                ['I3003', 'Sistemas Operativos I '],
                ['I3004', 'Complejidad Temporal, Estructuras de Datos y Algoritmos'],
                ['I3005', 'Bases de Datos I'],
                ['I3006', 'Redes de Computadoras I'],
                ['CI022', 'Matemática II'], ['CI025', 'Física I'],
                ['CI026', 'Matemática III '],
            ];
        $this->crear_materias($lista2, 2, $id_carrera);

        $lista3 =
            [
                ['I3007', 'Metodología de Programación I'],
                ['I3008', 'Información y Comunicaciones'], ['I3009', 'Ingeniería de Software I '],
                ['I3010', 'Redes de Computadoras II'],
                ['I3011', 'Proyecto Software'],
                ['I3012', 'Metodologías de Programación II'], ['I3013', 'Seguridad de la Información '],
                ['CI027', 'Física II'], ['CI029', 'Probabilidad y Estadística'],
                ['CI011', 'Química General'],
            ];
        $this->crear_materias($lista3, 3, $id_carrera);

        $lista4 =
            [
                ['I3014', 'Bases de Datos II'], ['I3015', 'Ingeniería de Software II'],
                ['I3016', 'Sistemas Operativos II'], ['I3017', 'Seguridad en Aplicaciones'],
                ['I3018', 'Aplicaciones Móviles'], ['I3019', 'Administración de Proyectos '],
                ['I3020', 'Lenguajes Formales y Autómatas'], ['I3021', 'Programación en Tiempo Real'],
                ['I3031', 'Optativa I '], ['CI030', 'Ingeniería Ambiental'],
            ];
        $this->crear_materias($lista4, 4, $id_carrera);

        $lista5 =
            [
                ['I3023', 'Sistemas y Organizaciones'], ['I3027', 'Legislación y Ejercicio Profesional de la Informática'],
                ['I3032', 'Optativa II '], ['I3033', 'Optativa III '],
                ['CI031', 'Gestión de Recursos Humanos '], ['CI035', 'Gestión de la Calidad, Higiene y Seguridad'],
                ['I3028', 'Economía'], ['I3029', 'Práctica Profesional Supervisada'],
                ['CI031', 'Gestión de Recursos Humanos '],
                ['CI035', 'Gestión de la Calidad, Higiene y Seguridad'],
            ];
        $this->crear_materias($lista5, 5, $id_carrera);
    }

    protected function materiasIngenieriaPetroleo()
    {
        $id_carrera = Carrera::where('nombre', 'Ingenieria en Petroleo')->value('id');

        //AÑO 1
        $lista1 =
        [
            ['CI021', 'Taller de Ingeniería'], ['CI009', 'Sistemas de Representación'], 
            ['CI004', 'Prácticas Culturales'], ['CI002', 'Matemática'], ['CI003', 'Problemas de Historia Argentina'],
            ['CI012', 'Matemática I'], ['CI001', 'Taller de Lectura y Escritura'], ['CI010', 'Fundamentos de Informática'],
        ];
        $this->crear_materias($lista1, 1, $id_carrera);

        //AÑO 2
        $lista2 =
            [
                ['I7012', 'Introducción a la Química'], ['I7001', 'Geología'], ['I7021', 'Química Orgánica'],
                ['CI023', 'Historia de la Ingeniería y la Tecnología'],
            ];
        $this->crear_materias($lista2, 2, $id_carrera);
        
        //AÑO 3
        $lista3 =
            [
                ['I7002', 'Geología del Petróleo']
            ];
        $this->crear_materias($lista3, 3, $id_carrera);
    }


    //FUNCION GENERICA PARA CREAR MATERIAS, indica una lista de 2 parámetros: codigo y nombre,
    //luego el anio, y luego el id de carrera
    protected function crear_materias($lista, $anio, $carrera_id)
    {
        $lista = $lista;
        foreach ($lista as $item) {
            Materia::create([
                'cod_materia' => $item[0],
                'nombre' => $item[1],
                'anio' => $anio,
                'carrera_id' => $carrera_id,
            ]);
        }
    }
}
