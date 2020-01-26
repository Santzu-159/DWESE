{{--Plantilla--}}
@extends('plantillas.plantilla')
{{--titulo de la página--}}
@section('titulo')
    Lista de Alumnos
@endsection
{{-- Cabecera--}}
@section('cabecera')
    Alumnos Matriculados
@endsection
{{--Contenido de la página--}}
@section('contenido')
{{--Muestra el mensaje que haya en el Session, si lo tiene--}}
@if(Session::has('mensaje'))
<div class='container mt-3 mb-3 alert-success'>
  {{Session::get('mensaje')}}
</div>
@endif
<a href="{{route('alumnos.create')}}" class='btn btn-success mt-2 mb-2 normal'>Nuevo Alumno</a>
{{--Tabla de la info--}}
<table class="table table-dark normal">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Email</th>
        <th scope="col">Dirección</th>
        <th scope="col">Telefono</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)
        <tr>
            <th scope="row">{{$alumno->id}}</th>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellidos}}</td>
            <td>{{$alumno->email}}</td>
            <td>{{$alumno->direccion}}</td>
            <td>{{$alumno->telefono}}</td>
            <td>
               <form name="borrar" action="{{route('alumnos.destroy',$alumno)}}" method='POST' style='white-space:nowrap;'>
                @csrf
                 @method('DELETE')
                 <a href="{{route('alumnos.edit',$alumno)}}" class='btn btn-info normal'>Editar</a>
                <input type="submit" value="Borrar" class='btn btn-danger normal'>
              </form>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  {{--Paginación--}}
  {{$alumnos->links()}}
@endsection