
@extends('plantillas.plantilla')
@section('titulo')
    Crear Alumno
@endsection

@section('cabecera')
    Nuevo Alumno
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
{{--Formulario crear el Alumno--}}
<form name="crear" action="{{route('alumnos.store')}}" method="POST">
{{--Para formularios seguros--}}
  @csrf 
    <div class="row">

      <div class="col">
        <input type="text" class="form-control" placeholder="Nombre" name='nombre' required>
      </div>
      
      <div class="col">
        <input type="text" class="form-control" placeholder="Apellidos" name='apellidos' required>
      </div>

      <div class="col">
        <input type="text" class="form-control" placeholder="Email" name='email' required>
      </div>

      <div class="col">
        <input type="text" class="form-control" placeholder="Dirección" name='direccion' required>
      </div>

      <div class="col">
        <input type="text" class="form-control" placeholder="Teléfono" name='telefono'>
      </div>

    </div>

    <div class='row mt-3'>
        
        <div class='col'>
            {{--Botón crear alumno--}}
            <input type='submit' class='btn btn-info normal' value='Crear'>
            {{--Borrar datos escritos en el formulario--}}
            <input type='reset' class='btn btn-warning normal' value='Limpiar'>
            {{--Botón voler al listado--}}
            <a href="{{route('alumnos.listado')}}" class='btn btn-info'>Volver</a>
        </div>

    </div>

  </form>
@endsection