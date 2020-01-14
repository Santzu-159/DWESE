@extends('plantilla')
@section('title')
Detalle Coche
@endsection
@section('cabecera')
Detalle del coche {{$coche}}
@endsection
@section('contenido')
    El coche {{$coche}} es patata.
    <div class='container mt-5 text-center'>
        <a href="{{route('coches.ver')}}" class ='btn btn-success'>Volver</a>
    </div>
@endsection