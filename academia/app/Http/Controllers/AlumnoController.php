<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\Modulo;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::orderBy('apellidos')->paginate(5);
        return view('alumnos.index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        return view('alumnos.detalle',compact('alumno'));
    }

    public function fmatricula(Alumno $alumno){
        //esto me devuelve los id de los modulos que tiene $alumno
        $modulos1=$alumno->modulos()->pluck('modulos.id'); //pluck crea un array de un campo en este caso modulo.id
        //esto devuelve los modulos que le falta al alumno
        $modulos2=Modulo::whereNotIn('id',$modulos1)->get();
        //compruebo si ya tiene todos los modulos
        if($modulos2->count()== 0){
            return redirect()->route('alumnos.show',$alumno)->with('mensaje','Este alumno ya esta matriculado de todos los modulos');    
        }
        //cargamos el formulario matricular alumno y le mando el alumno y los modulos que le faltan
        return view('alumnos.fmatricula',compact('alumno','modulos2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        //
    }
}
