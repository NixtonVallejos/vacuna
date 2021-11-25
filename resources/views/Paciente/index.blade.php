@extends('layouts.plantilla')

@section('container')
<a href="Vacuna/create" class="btn btn-primaty">Crear Paciente</a>
<table class="table table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cedula</th>
      <th scope="col">Nacimiento</th>
      <th scope="col">Codigo municipio</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($paciente as $pac)
    <tr>
        <td>{{ $pac->id }}</td>
        <td>{{ $pac->name }}</td>
        <td>{{ $pac->cedula }}</td>
        <td>{{ $pac->birth }}</td>
        <td>{{ $pac->municipio_id }}</td>
        <td>
            <a class="btn btn-info">Editar</a>
            <a class="btn btn-danger">Borrar</a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection