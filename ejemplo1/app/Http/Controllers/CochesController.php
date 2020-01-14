<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CochesController extends Controller
{
    public function index(){
        $coches=[
            'Seat Ibiza Blanco',
            'Renault Megane Rojo',
            'Opel Astra Azul'
        ];
        return view ('coches.coches', compact('coches'));
    }
    public function detalle($coche){
        return view('coches.detalle', compact('coche'));
    }
}
