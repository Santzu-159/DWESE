@extends('plantillas.plantilla')
@section('titulo')
    Editar Alumno
@endsection
@section('cabecera')
    Modificar Alumno
@endsection
@section('contenido')

<div class='container mt-3 mb-2'>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
{{--Formulario para editar el Alumno--}}
<form name="editar" action="{{route('alumnos.update',$alumno)}}" method="POST">
{{--Para formularios seguros--}}
  @csrf 
  @method('PUT')
    <div class="row">
        <div class="col">
             <input type="text" class="form-control" value="{{$alumno->nombre}}" name='nombre' required>
         </div>

        <div class="col">
             <input type="text" class="form-control" value="{{$alumno->apellidos}}" name='apellidos' required>
         </div>

        <div class="col">
            <input type="text" class="form-control" value="{{$alumno->email}}" name='email' required>
        </div>

        <div class="col">
            <input type="text" class="form-control" value="{{$alumno->direccion}}" name='direccion' required>
        </div>

        <div class="col">
            <input type="text" class="form-control" value="{{$alumno->telefono}}" name='telefono'>
        </div>

        <input type='hidden' name='id' value='{{$alumno->id}}'>
    </div>

    <div class='row mt-3'>

        <div class='col'>
            {{--Botón editar Alumno--}}
            <input type='submit' class='btn btn-info normal' value='Editar'>
            {{--Borrar datos escritos en el formulario--}}
            <input type='reset' class='btn btn-warning normal' value='Limpiar'>
            {{--Botón que permite volver a la página con la lista de alumnos--}}
            <a href="{{route('alumnos.listado')}}" class='btn btn-info'>Volver</a>
        </div>

    </div>

  </form>
@endsection