<?php

use Illuminate\Database\Seeder;
use App\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('alumnos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        //vaciamos la tabla que no me hiciesa la integridad referencial
        factory(Alumno::class ,20)->create();
    }
}
