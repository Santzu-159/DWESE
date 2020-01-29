<?php

use Illuminate\Database\Seeder;
use App\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('marcas')->insert([
            'nombre' => 'Seat',
            'pais' => 'España'
        ]);*/


        //Vaciamos las tablas
        //desactivamos las constraints para no tener problemas para hacer el truncate
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //Hacemos el truncate
        DB::table('marcas')->truncate();
        // volvemos a activar las foreigns keys
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Marca::create([
            'nombre' => 'Seat',
            'pais' => 'España'
        ]);

        Marca::create([
            'nombre' => 'Renault',
            'pais' => 'Francia'
        ]);
        Marca::create([
            'nombre' => 'Volkswagen',
            'pais' => 'Alemania'
        ]);
        Marca::create([
            'nombre' => 'Citroen',
            'pais' => 'Francia'
        ]);

        Marca::create([
            'nombre' => 'Fiat',
            'pais' => 'Italia'
        ]);

        Marca::create([
            'nombre' => 'Opel',
            'pais' => 'Alemania'
        ]);

        Marca::create([
            'nombre' => 'Ford',
            'pais' => 'USA'
        ]);

        Marca::create([
            'nombre' => 'Toyota',
            'pais' => 'Japón'
        ]);
    }
}
