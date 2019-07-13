<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Fecades\DB;
use App\Aula;
use App\Edificio;
class AulasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$id_mosco = Edificio::where('nombre', 'Enrique Mosconi')->value('id');
    	$id_savio = Edificio::where('nombre', 'Manuel Savio')->value('id');
    	$id_pistarini = Edificio::where('nombre', 'Juan Pistarini')->value('id');
    	$id_dessi = Edificio::where('nombre', 'Silvio Dessi')->value('id');
    	$id_julieta = Edificio::where('nombre', 'Julieta Lanteri')->value('id');
    	$id_ugarte = Edificio::where('nombre', 'Manuel Ugarte')->value('id');
    	$id_manzi = Edificio::where('nombre', 'Homero Manzi')->value('id');
    	$id_carrillo = Edificio::where('nombre', 'Ramon Carrillo')->value('id');


    	$this->aulasMosconi($id_mosco);
    	$this->aulasSavio($id_savio);
    	$this->aulasPistarini($id_pistarini);
    	$this->aulasDessi($id_dessi);
    	$this->aulasJulieta($id_julieta);
    	$this->aulasUgarte($id_ugarte);
    	$this->aulasManzi($id_manzi);
    	$this->aulasCarrillo($id_carrillo);


       
    }

    protected function aulasMosconi($id_mosco)
    {
    	for ($i=1; $i <8 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Subsuelo',
    		'edificio_id' => $id_mosco
    	]);
    	}

    	for ($i=16; $i <18 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Planta Baja',
    		'edificio_id' => $id_mosco
    	]);
    	}

    	for ($i=52; $i <56 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Planta Baja',
    		'edificio_id' => $id_mosco
    	]);
    	}

    	for ($i=120; $i <141 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Primer Piso',
    		'edificio_id' => $id_mosco
    	]);
    	}

    	for ($i=205; $i <219 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Segundo Piso',
    		'edificio_id' => $id_mosco
    	]);
    	}

    		for ($i=302; $i <319 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Tercer Piso',
    		'edificio_id' => $id_mosco
    	]);
    	}

    		for ($i=407; $i <421 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Cuarto Piso',
    		'edificio_id' => $id_mosco
    	]);
    	}


    }

    protected function aulasSavio($id_savio)
    {
    	for ($i=20; $i <28 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Planta Baja',
    		'edificio_id' => $id_savio
    	]);
    	}

    	for ($i=28; $i <37 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Primer Piso',
    		'edificio_id' => $id_savio
    	]);
    	}

    }

    protected function aulasPistarini($id_pistarini)
    {
    	for ($i=61; $i <66 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Planta Baja',
    		'edificio_id' => $id_pistarini
    	]);
    	}

    	for ($i=66; $i <71 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Primer Piso',
    		'edificio_id' => $id_pistarini
    	]);
    	}

    }

    protected function aulasDessi($id_dessi)
    {
    	for ($i=1; $i <4 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => 'Laboratorio',
    		'piso' => '',
    		'edificio_id' => $id_dessi
    	]);
    	}

 

    }

    protected function aulasJulieta($id_julieta)
    {
    	for ($i=1; $i <13 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Planta Baja',
    		'edificio_id' => $id_julieta
    	]);
    	}
    }

    protected function aulasUgarte($id_ugarte)
    {
    	for ($i=37; $i <40 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Planta Baja',
    		'edificio_id' => $id_ugarte
    	]);
    	}

    	for ($i=40; $i <51 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Primer Piso',
    		'edificio_id' => $id_ugarte
    	]);
    	}

    }

    protected function aulasManzi($id_manzi)
    {
    	for ($i=18; $i <20 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => '',
    		'edificio_id' => $id_manzi
    	]);
    	}
    }

    protected function aulasCarrillo($id_carrillo)
    {
    	for ($i=1; $i <16 ; $i++) { 
    		Aula::create([
    		'numero'=> $i,
    		'nombre' => '',
    		'piso' => 'Primer Piso',
    		'edificio_id' => $id_carrillo
    	]);
    	}
    }

}
