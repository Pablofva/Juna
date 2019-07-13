<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Fecades\DB;
use App\Carrera;
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
    	$id_ing = Instituto::where('nombre', 'Ingenieria y Agronomia')->value('id');
    	$id_salud = Instituto::where('nombre', 'Ciencias de la Salud')->value('id');
    	$id_sociales = Instituto::where('nombre', 'Ciencias Sociales y Administracion')->value('id');
        $id_ini = Instituto::where('nombre', 'Estudios Iniciales')->value('id');

        $this->carrerasIng($id_ing);
        $this->carrerasSalud($id_salud);
        $this->carrerasSociales($id_sociales);
    }

    protected function carrerasIng($id_ing)
    {
    	Carrera::create([
    		'nombre'=> 'Ingenieria en Petroleo',
    		'instituto_id' => $id_ing
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Bioingenieria',
    		'instituto_id' => $id_ing
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Ingenieria Electromecanica',
    		'instituto_id' => $id_ing
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Ingenieria en Ciencias Agrarias',
    		'instituto_id' => $id_ing
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Tec. Universitaria en Emprendimientos Agropecuarios',
    		'instituto_id' => $id_ing
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Ingenieria en Informatica',
    		'instituto_id' => $id_ing
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Ingenieria Industrial',
    		'instituto_id' => $id_ing
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Ingenieria en Administracion Agraria',
    		'instituto_id' => $id_ing
    		
    	]);
    	Carrera::create([
    		'nombre'=> 'Ingenieria en Transporte',
    		'instituto_id' => $id_ing
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Tec. Universitaria en Produccion Vegetal Intensiva',
    		'instituto_id' => $id_ing
    		
    	]);
    }

    protected function carrerasSalud($id_salud)
    {
    	Carrera::create([
    		'nombre'=> 'Medicina',
    		'instituto_id' => $id_salud
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Bioquimica',
    		'instituto_id' => $id_salud
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Tecnicatura Universitaria en Informacion Clinica y Gestion de Pacientes',
    		'instituto_id' => $id_salud
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Licenciatura en Organizacion y Asistencia de Quiforanos',
    		'instituto_id' => $id_salud
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Licenciatura en Kinesiologia y Fisiatria',
    		'instituto_id' => $id_salud
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Tecnicatura en Emergencias Sanitarias y Desastres',
    		'instituto_id' => $id_salud
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Maestria en Neurociencias',
    		'instituto_id' => $id_salud
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Licenciatura en Enfermeria',
    		'instituto_id' => $id_salud
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Tecnicatura Universitaria en Farmacia Hospitalaria',
    		'instituto_id' => $id_salud
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Maestria en Investigacion Traslacional para la Salud',
    		'instituto_id' => $id_salud
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Especializacion en Cardiologia',
    		'instituto_id' => $id_salud
    		
    	]);

    }

    protected function carrerasSociales($id_sociales)
    {
    	Carrera::create([
    		'nombre'=> 'Licenciatura en Economia',
    		'instituto_id' => $id_sociales
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Licenciatura en Trabajo Social',
    		'instituto_id' => $id_sociales
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Licenciatura en Administracion',
    		'instituto_id' => $id_sociales
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Licenciatura en Gestion Ambiental',
    		'instituto_id' => $id_sociales
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Licenciatura en Relaciones del Trabajo',
    		'instituto_id' => $id_sociales
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Especializacion en Evaluacion de Politicas Publicas',
    		'instituto_id' => $id_sociales
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Curso de Posgrado Ecotoxicologia Acuatica',
    		'instituto_id' => $id_sociales
    		
    	]);

    	Carrera::create([
    		'nombre'=> 'Diplomatura Superior y de Vinculacion en Gobiernos Locales y Transformacion Social',
    		'instituto_id' => $id_sociales
    		
    	]);
    }

}
