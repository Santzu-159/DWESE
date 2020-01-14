@extends('plantilla')
@section('title')
Detalle articulo
@endsection
@section('cabecera')
Detalle del artículo {{$articulo}}
@endsection
@section('contenido')
    El articulo {{$articulo}} es un truño.
    <div class='container mt-5 text-center'>
        <a href="{{route('larticulos')}}" class ='btn btn-success'>Volver</a>
    </div>
@endsection