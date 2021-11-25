@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
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
          <form action="{{ route('paciente.destroy',$pac->id) }}" method="POST">
            <a href="/paciente/{{ $pac->id }}/edit" class="btn btn-info">Editar</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
