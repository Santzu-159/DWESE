@extends('plantillas.plantilla')
@section('title')
Coches
@endsection
@section('cabecera')
Listado de Coches
@endsection
@section('contenido')
    <ol>
    @foreach($coches as $item)
    <li><a href="{{route('coches.detalle', $item)}}">{{$item}}</a></li>
    @endforeach
    </ol>
@endsection