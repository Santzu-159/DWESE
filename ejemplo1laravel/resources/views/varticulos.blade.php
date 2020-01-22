@extends('plantilla')
@section('title')
Articulos
@endsection
@section('cabecera')
Listado de Articulos
@endsection
@section('contenido')
    <ol>
    @foreach($articulos as $item)
    <li><a href="{{route('darticulo', $item)}}">{{$item}}</a></li>
    @endforeach
    </ol>
@endsection