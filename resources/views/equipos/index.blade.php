{{--
  NOTA 1: Los comentarios en blade se hacen asi (con {{-- ...)   
    
--}}

{{--@extends('layouts.plantilla')--}}
@extends('layouts.app')'
@section('title','Lista de Equipos')

@section('content')
<div>
  <div>
    <h1>Lista de Equipos</h1>
  </div>
  <div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalAgregarEquipo">
      Agregar
    </button>
  </div>
</div>
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
      <th scope="col">Ordenes</th>
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
            <td>&nbsp;</td>
            <td>{{$equipo->id_estado_equipo}}</td>
            <td>{{$equipo->id_estado_registro}}</td>
            <td>
              <div class="btn-group" role="group" aria-label="Opciones Registro">
                <button type="button" class="btn btn-warning">Editar</button>
                <button type="button" class="btn btn-primary">Duplicar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
              </div>
            </td>
          </tr>
          @php($cont++)
      @endforeach
  </tbody>
</table>


{{$equipos->links()}}
@endsection

<!-- Modal Agregar-->
<div class="modal fade" id="ModalAgregarEquipo" tabindex="-1" aria-labelledby="ModalAgregarEquipoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalAgregarEquipoLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
