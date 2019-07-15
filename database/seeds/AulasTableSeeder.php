<?php

use Illuminate\Database\Seeder;
use App\Edificio;
use App\Aula;

class AulasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //AULAS DE EDIFICIO MOSCONI
        $id_mos = Edificio::where('nombre', 'Enrique Mosconi')->value('id');

        $this->aulasSubsueloMos($id_mos);
        $this->aulasPlantaBajaMos($id_mos);
        $this->aulas1erPisoMos($id_mos);
        $this->aulas2doPisoMos($id_mos);
        $this->aulas3erPisoMos($id_mos);
        $this->aulas4toPisoMos($id_mos);

        // AULAS DE EDIFICIO LANTERI
        $id_lan = Edificio::where('nombre', 'Julieta Lanteri')->value('id');

        $this->aulas1erPisoLan($id_lan);

        // AULAS DE EDIFICIO PISTARINI
        $id_pist = Edificio::where('nombre', 'Juan Pistarini')->value('id');
        $this->aulasPlantaBajaPist($id_pist);
        $this->aulas1erPisoPist($id_pist);

        // AULAS DE EDIFICIO DESSI
        $id_dess = Edificio::where('nombre', 'Silvio Dessi')->value('id');
        $this->aulasPlantaBajaDess($id_dess);

        // AULAS DE EDIFICIO UGARTE
        $id_ugar = Edificio::where('nombre', 'Manuel Ugarte')->value('id');
        $this->aulasPlantaBajaUgar($id_ugar);
        $this->aulas1erPisoUgar($id_ugar);
    }

    //AULAS DE EDIFICIO MOSCONI
    protected function aulasSubsueloMos($id_mos)
    {

        for ($i=1; $i < 8; $i++) { 
            Aula::create([
                'numero' => $i,
                'nombre' => '',
                'piso' => 'Subsuelo',
                'edificio_id' => $id_mos,
            ]);
        }
    }

    protected function aulasPlantaBajaMos($id_mos)
    {
        for ($i=16; $i < 18; $i++) {
            Aula::create([
                'numero' => $i,
                'nombre' => '',
                'piso' => 'Planta Baja',
                'edificio_id' => $id_mos,
            ]);
        }

        for ($i = 52; $i < 56; $i++) {
            if ($i != 54) {
                Aula::create([
                    'numero' => $i,
                    'nombre' => '',
                    'piso' => 'Planta Baja',
                    'edificio_id' => $id_mos,
                ]);
            }
            
        }
    }

    protected function aulas1erPisoMos($id_mos)
    {
        Aula::create([
            'numero' => 120,
            'nombre' => '',
            'piso' => '1er Piso',
            'edificio_id' => $id_mos,
        ]);
        for ($i = 129; $i < 141; $i++) {
            if (($i != 133) and ($i != 135) and ($i != 137) and ($i != 138)) {
                Aula::create([
                    'numero' => $i,
                    'nombre' => '',
                    'piso' => '1er Piso',
                    'edificio_id' => $id_mos,
                ]);
            }
        }
    }

    protected function aulas2doPisoMos($id_mos)
    {
        for ($i = 205; $i < 207; $i++) {
            Aula::create([
                'numero' => $i,
                'nombre' => '',
                'piso' => '2do Piso',
                'edificio_id' => $id_mos,
            ]);
        }

        for ($i = 212; $i < 215; $i++) {
            if ($i != 213) {
                Aula::create([
                    'numero' => $i,
                    'nombre' => '',
                    'piso' => '2do Piso',
                    'edificio_id' => $id_mos,
                ]);
            }
        }
    }

    protected function aulas3erPisoMos($id_mos)
    {
        for ($i = 305; $i < 309; $i++) {
            Aula::create([
                'numero' => $i,
                'nombre' => '',
                'piso' => '3er Piso',
                'edificio_id' => $id_mos,
            ]);
        }
        for ($i = 310; $i < 317; $i = $i + 2) {
            Aula::create([
                'numero' => $i,
                'nombre' => '',
                'piso' => '3er Piso',
                'edificio_id' => $id_mos,
            ]); 
        }
    }

    protected function aulas4toPisoMos($id_mos)
    {
        for ($i = 407; $i < 411; $i++) {
            Aula::create([
                'numero' => $i,
                'nombre' => '',
                'piso' => '4to Piso',
                'edificio_id' => $id_mos,
            ]); 
        }
        for ($i = 412; $i < 421; $i= $i + 2) {
            Aula::create([
                'numero' => $i,
                'nombre' => '',
                'piso' => '4to Piso',
                'edificio_id' => $id_mos,
            ]);
        }
    }

    //AULAS DE EDIFICIO LANTERI

    protected function aulas1erPisoLan($id_lan)
    {
        for ($i = 1; $i < 13; $i++) {
            Aula::create([
                'numero' => $i,
                'nombre' => '',
                'piso' => '1er Piso',
                'edificio_id' => $id_lan,
            ]);
        }
    }

    // AULAS DE EDIFICIO PISTARINI
    protected function aulasPlantaBajaPist($id_pist)
    {
        for ($i = 61; $i < 66; $i++) 
        {
            Aula::create([
                'numero' => $i,
                'nombre' => '',
                'piso' => 'Planta Baja',
                'edificio_id' => $id_pist,
            ]);
        }
            
    }

    protected function aulas1erPisoPist($id_pist)
    {
        for ($i = 66; $i < 71; $i++) 
        {
            Aula::create([
                'numero' => $i,
                'nombre' => '',
                'piso' => '1er Piso',
                'edificio_id' => $id_pist,
            ]);
        }
    }

    // AULAS DE EDIFICIO DESSI
    protected function aulasPlantaBajaDess($id_dess)
    {
        for ($i = 1; $i < 4; $i++) {
            Aula::create([
                'numero' => $i,
                'nombre' => 'Laboratorio',
                'piso' => 'Planta Baja',
                'edificio_id' => $id_dess,
            ]);
        }
    }

    // AULAS DE EDIFICIO UGARTE
    protected function aulasPlantaBajaUgar($id_ugar)
    {
        for ($i = 37; $i < 40; $i++) {
            Aula::create([
                'numero' => $i,
                'nombre' => '',
                'piso' => 'Planta Baja',
                'edificio_id' => $id_ugar,
            ]);
        }
    }

    protected function aulas1erPisoUgar($id_ugar)
    {
        Aula::create([
            'numero' => 40,
            'nombre' => '',
            'piso' => '1er Piso',
            'edificio_id' => $id_ugar,
        ]);
        for ($i = 42; $i < 51; $i++)
        { 
            if ($i != 47) 
            {
                Aula::create([
                    'numero' => $i,
                    'nombre' => '',
                    'piso' => '1er Piso',
                    'edificio_id' => $id_ugar,
                ]);
            }
        }
    }

    // AULAS DE EDIFICIO 
}
