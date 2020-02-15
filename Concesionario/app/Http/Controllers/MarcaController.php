<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pais=$request->get('pais');

        $paises=Marca::orderBy('pais')->get();

        $marcas=Marca::orderBy('id')
        ->pais($pais)
        ->paginate(3);

        return view('marcas.index',compact('marcas','paises','pais','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>['required', 'unique:marcas,nombre']
        ]);
        //compruebo si he subido archiivo
        if($request->has('logo')){
            $request->validate([
                'logo'=>['image']
            ]);
            //Todo bien hemos subido un archivo y es de imagen
            $file=$request->file('logo');
            //Creo un nombre
            $nombre='marcas/'.time().'_'.$file->getClientOriginalName();
            //Guardo el archivo de imagen
            Storage::disk('public')->put($nombre, \File::get($file));
            //Guardo el marca pero la imagen estaria mal
            $marca=Marca::create($request->all());
            //actualiza el registro logo del marca guardado
            $marca->update(['logo'=>"img/$nombre"]);
        }
        else{
            Marca::create($request->all());
        }
        return redirect()->route('marcas.index')->with("mensaje", "Marca Guardada");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        return view('marcas.detalle',compact('marca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
        return view('marcas.edit',compact('marca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marca $marca)
    {
        $request->validate([
            'nombre'=>['required', 'unique:marcas,nombre,'.$marca->nombre.',nombre']
        ]);
        //compruebo si he subido archiivo
        if($request->has('logo')){
            $request->validate([
                'logo'=>['image']
            ]);
            //Todo bien hemos subido un archivo y es de imagen
            $file=$request->file('logo');
            //Creo un nombre
            $nombre='marcas/'.time().'_'.$file->getClientOriginalName();
            //Guardo el archivo de imagen
            Storage::disk('public')->put($nombre, \File::get($file));
            //si he subido un alogo nueva booro la vieja, SALVO que sea default.jpg
            if(basename($marca->logo)!='default.jpg'){
                unlink($marca->logo);
            }
            //ahora actualizo el marca
            $marca->update($request->all());
            $marca->update(['logo'=>"img/$nombre"]);
        }
        else{
            $marca->update($request->all());
        }
        return redirect()->route('marcas.index')->with("mensaje", "Marca Modificada");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        //Dos cosas borrar la imagen si no es default.jpg
        //y borrar registro
        $logo=$marca->logo;
        if(basename($logo)!='default.jpg'){
            //la borro NO es default.jpg
            unlink($logo);
        }
        //en cualquier caso borro el registro
        $marca->delete();
        return redirect()->route('marcas.index')->with('mensaje','Marca Eliminada');
    }
}