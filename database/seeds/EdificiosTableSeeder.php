<?php

use Illuminate\Database\Seeder;
use App\Edificio;
use App\Sede;

class EdificiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // EDIFICIOS DE YPF
        $id_ypf = Sede::where('nombre', 'Sede Central (YPF)')->value('id');

        Edificio::create([
            'nombre' => 'Enrique Mosconi',
            'sede_id' => $id_ypf,
        ]);
        Edificio::create([
            'nombre' => 'Manuel Savio',
            'sede_id' => $id_ypf,
        ]);
        Edificio::create([
            'nombre' => 'Juan Pistarini',
            'sede_id' => $id_ypf,
        ]);
        Edificio::create([
            'nombre' => 'Silvio Dessi',
            'sede_id' => $id_ypf,
        ]);
        Edificio::create([
            'nombre' => 'Ing. Hector Abrales',
            'sede_id' => $id_ypf,
        ]);
        Edificio::create([
            'nombre' => 'Guillermo Hudson',
            'sede_id' => $id_ypf,
        ]);
        Edificio::create([
            'nombre' => 'Julieta Lanteri',
            'sede_id' => $id_ypf,
        ]);
        Edificio::create([
            'nombre' => 'Manuel Ugarte',
            'sede_id' => $id_ypf,
        ]);
        Edificio::create([
            'nombre' => 'Homero Manzi',
            'sede_id' => $id_ypf,
        ]);
        Edificio::create([
            'nombre' => 'Ramon Carrillo',
            'sede_id' => $id_ypf,
        ]);
    }
}
