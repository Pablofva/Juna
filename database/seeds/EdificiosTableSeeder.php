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
            'imagen' =>'mosconi.jpg'
        ]);
        Edificio::create([
            'nombre' => 'Manuel Savio',
            'sede_id' => $id_ypf,
            'imagen' =>'savio.jpg'
        ]);
        Edificio::create([
            'nombre' => 'Juan Pistarini',
            'sede_id' => $id_ypf,
            'imagen' =>'pistarini.jpg'
        ]);
        Edificio::create([
            'nombre' => 'Silvio Dessi',
            'sede_id' => $id_ypf,
            'imagen' =>'dessi.jpg'
        ]);
        Edificio::create([
            'nombre' => 'Ing. Hector Abrales',
            'sede_id' => $id_ypf,
            'imagen' =>'abrales.jpg'
        ]);
        Edificio::create([
            'nombre' => 'Guillermo Hudson',
            'sede_id' => $id_ypf,
            'imagen' =>'hudson.jpg'
        ]);
        Edificio::create([
            'nombre' => 'Julieta Lanteri',
            'sede_id' => $id_ypf,
            'imagen' =>'lanteri.jpg'
        ]);
        Edificio::create([
            'nombre' => 'Manuel Ugarte',
            'sede_id' => $id_ypf,
            'imagen' =>'ugarte.jpg'
        ]);
        Edificio::create([
            'nombre' => 'Homero Manzi',
            'sede_id' => $id_ypf,
            'imagen' =>'manzi.jpg'
        ]);
        Edificio::create([
            'nombre' => 'Ramon Carrillo',
            'sede_id' => $id_ypf,
            'imagen' =>'carrillo.jpg'
        ]);
    }
}
