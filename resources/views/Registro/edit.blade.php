@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<form action="/registro/{{$registro->id}}" method="POST">
  @csrf    
  @method('PUT')
<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Registro De vacunacion</h5>
            <form class="form-signin">

              <div class="form-label-group">
                <input type="text" id="doci" class="form-control" placeholder="Doci" required autofocus>
                <label for="inputUserame">Doci</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="Vacuna" class="form-control" placeholder="Vacuna" required autofocus>
                <label for="inputUserame">Vacuna</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="lugar" class="form-control" placeholder="Puesto de salud" required autofocus>
                <label for="inputUserame">Puesto de salud</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="enfermera" class="form-control" placeholder="Identificacion de la enfermera" required autofocus>
                <label for="telefono">Identificacion de la enfermera</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="paciente" class="form-control" placeholder="Identificacion del paciente" required autofocus>
                <label for="telefono">Identificacion del paciente</label>
              </div>

              <div class="form-label-group">
                <input type="date" id="inputUserame" class="form-control" placeholder="Fecha" required autofocus>
                <label for="inputUserame">Fecha</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Editar registro</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
@stop