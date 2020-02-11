<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable=['nombre','apellidos','mail','logo'];

    //Metodos para la relacion n:m con Modulo
    public function modulos(){
        return $this->belongsToMany('App\Modulo')->withPivot('nota')->withTimestamps();
    }
}
