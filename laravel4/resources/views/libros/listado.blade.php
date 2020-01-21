@extends('plantillas.plantilla')
@section('titulo')
    Listado Libros
@endsection
@section('cabecera')
    LIBROS DISPONIBLES
@endsection
@section('contenido')
@if($sesion::has('mensaje'))
  <div class = "container mt-3 mb-3 alert-success normal">
    {{session('mensaje')}}
  </div>
@endif
<table class="table table-dark normal">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Título</th>
        <th scope="col">Sinopsis</th>
        <th scope="col">Precio (€)</th>
        <th scope="col">ISBN</th>
        <th scope="col">Stock</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($libros as $item)
        <tr>
          
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->titulo}}</td>
            <td>{{$item->sinopsis}}</td>
            <td>{{$item->pvp}}</td>
            <td>{{$item->isbn}}</td>
            <td>{{$item->stock}}</td>
            <td>
              <form  bane="borrar" action="{{route('libros.destroy','$item')}}" method='POST'>
                @csrf <!-- Proteger un formulario se pone obligatorio por que si no petardea por todos lados -->
                @method ('DELETE') <!-- Es necesario poner el method Delete -->
                <input type ="submit" value="Borrar" class='btn btn-danger normal'>
              </form>

            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  {{$libros->links()}}
@endsection