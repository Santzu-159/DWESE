<?php

use Illuminate\Database\Seeder;
use App\Alumnos;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("alumnos")->truncate();
        factory(Alumnos::class,20)->create();
    }
}
