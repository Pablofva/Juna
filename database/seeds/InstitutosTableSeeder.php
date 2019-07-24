<?php
use App\Instituto;
use Illuminate\Database\Seeder;

class InstitutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Instituto::create([
            'nombre' => 'Ingenieria y Agronomia',
            'color_hexa' => ''
        ]);
        Instituto::create([
            'nombre' => 'Salud',
            'color_hexa' => ''
        ]);
        Instituto::create([
            'nombre' => 'Sociales y Administracion',
            'color_hexa' => ''
        ]);
        Instituto::create([
            'nombre' => 'Iniciales',
            'color_hexa' => ''
        ]);
    }
}
