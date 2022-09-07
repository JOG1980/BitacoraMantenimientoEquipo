{{--
  NOTA 1: Los comentarios en blade se hacen asi (con {{-- ...)   
    
--}}

@extends('layouts.plantilla')
@section('title','Lista de Equipos')

@section('content')
<h1>Hola mundo!!!</h1>

<h1>Mostrando en la lista de equipos</h1>

<ul>
    @foreach ($equipos as $equipo)
        <li>{{$equipo}}</li>
    @endforeach
</ul>

{{$equipos->links()}}
@endsection
