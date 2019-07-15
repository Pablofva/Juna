<?php

use App\Carrera;
use Illuminate\Database\Seeder;
use App\Instituto;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Carreras de INGENIERIA Y AGRONOMIA
        $id_ing = Instituto::where('nombre', 'Ingenieria y Agronomia')->value('id');

        Carrera::create([
            'nombre' => 'Ingenieria en Informatica',
            'instituto_id' => $id_ing,
        ]);
        Carrera::create([
            'nombre' => 'Ingenieria en Petroleo',
            'instituto_id' => $id_ing,
        ]);
        Carrera::create([
            'nombre' => 'Bioingenieria',
            'instituto_id' => $id_ing,
        ]);
        Carrera::create([
            'nombre' => 'Ingenieria en Electromecanica',
            'instituto_id' => $id_ing,
        ]);
        Carrera::create([
            'nombre' => 'Ingenieria en Industrial',
            'instituto_id' => $id_ing,
        ]);
        Carrera::create([
            'nombre' => 'Tecnicatura Universitaria en Emprendimientos Agropecuarios',
            'instituto_id' => $id_ing,
        ]);
        Carrera::create([
            'nombre' => 'Licenciatura en Administracion Agraria',
            'instituto_id' => $id_ing,
        ]);
        Carrera::create([
            'nombre' => 'Licenciatura en Ciencias Agrarias',
            'instituto_id' => $id_ing,
        ]);
        Carrera::create([
            'nombre' => 'Ingenieria en transporte',
            'instituto_id' => $id_ing,
        ]);




        // Carreras de SALUD
        $id_salud = Instituto::where('nombre', 'Salud')->value('id');

        Carrera::create([
            'nombre' => 'Medicina',
            'instituto_id' => $id_salud,
        ]);
        Carrera::create([
            'nombre' => 'Bioquimica',
            'instituto_id' => $id_salud,
        ]);
        Carrera::create([
            'nombre' => 'Licenciatura en Organizacion y Asistencia de Quirofanos',
            'instituto_id' => $id_salud,
        ]);
        Carrera::create([
            'nombre' => 'Licenciatura en Kinesiologia y Fisiatria',
            'instituto_id' => $id_salud,
        ]);
        Carrera::create([
            'nombre' => 'Licenciatura en Emergencias Sanitarias y Desastres',
            'instituto_id' => $id_salud,
        ]);
        Carrera::create([
            'nombre' => 'Tecnicatura Universitaria en Farmacia Hospitalaria',
            'instituto_id' => $id_salud,
        ]);
        Carrera::create([
            'nombre' => 'Tecnicatura Universitaria en Informacion Clinica y Gestion de Pacientes',
            'instituto_id' => $id_salud,
        ]);




        // Carreras de SOCIALES Y ADMINISTRACION
        $id_soc = Instituto::where('nombre', 'Sociales y Administracion')->value('id');

        Carrera::create([
            'nombre' => 'Licenciatura en Economia',
            'instituto_id' => $id_soc,
        ]);
        Carrera::create([
            'nombre' => 'Licenciatura en Trabajo Social',
            'instituto_id' => $id_soc,
        ]);
        Carrera::create([
            'nombre' => 'Licenciatura en Administracion',
            'instituto_id' => $id_soc,
        ]);
        Carrera::create([
            'nombre' => 'Licenciatura en Gestion Ambiental',
            'instituto_id' => $id_soc,
        ]);
        Carrera::create([
            'nombre' => 'Licenciatura en Relaciones del Trabajo',
            'instituto_id' => $id_soc,
        ]);
    }
}
