{{--
  NOTA 1: Los comentarios en blade se hacen asi (con {{-- ...)   
    
--}}

{{--@extends('layouts.plantilla')--}}
@extends('layouts.app')'
@section('title','Lista de Equipos')

@section('content')
<h1>Lista de Equipos</h1>

<table  class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">R3</th>
      <th scope="col">Descripción</th>
      <th scope="col">No Serie</th>
      <th scope="col">S.E.</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Est. Eqp.</th>
      <th scope="col">Est. Reg.</th>
    </tr>
  </thead>
  <tbody>
    @php($cont = 1)
      @foreach ($equipos as $equipo)
          <tr>
            <th scope="row">{{$cont}}</th>
            <td>{{$equipo->r3}}</td>
            <td>{{$equipo->descripcion}}</td>
            <td>{{$equipo->numero_serie}}</td>
            <td>{{$equipo->id_subestacion}}</td>
            <td>{{$equipo->id_marca}}</td>
            <td>{{$equipo->id_modelo}}</td>
            <td>{{$equipo->id_estado_equipo}}</td>
            <td>{{$equipo->id_estado_registro}}</td>
          </tr>
          @php($cont++)
      @endforeach
  </tbody>
</table>


{{$equipos->links()}}
@endsection
