<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ArticulosController extends Controller{

    public function index(){
        $articulos =[
            'Articulo1',
            'Articulo 2',
            'Articulo 3',
            'Articulo 4'
        ];

        return view ('varticulos', compact('articulos'));
    }
    public function detalle($articulo){
        return view('darticulo', compact('articulo'));
    }
}