@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<a href="Vacuna/create" class="btn btn-primaty">Las Vacuna</a>
<table class="table table-striped mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">lavoratorio</th>
      <th scope="col">cadena_frio</th>
      <th scope="col">dosis</th>
      <th scope="col">inactiva</th>
      <th scope="col">vector_viral</th>
      <th scope="col">nucleicos</th>
      <th scope="col">sub_unidad_proteica</th>
    </tr>
  </thead>
  <tbody>
    @if (is_array($vacuna ?? ''))
        @foreach ($vacuna ?? '' as $art)
        <tr>
            <td>{{ $art->id }}</td>
            <td>{{ $art->name }}</td>
            <td>{{ $art->lavoratorio }}</td>
            <td>{{ $art->cadena_frio }}</td>
            <td>{{ $art->dosis }}</td>
            <td>{{ $art->vector_viral }}</td>
            <td>{{ $art->inactiva }}</td>
            <td>{{ $art->vector_viral }}</td>
            <td>{{ $art->sub_unidad_proteica }}</td>
            <td>
                <a class="btn btn-info">Editar</a>
                <a class="btn btn-danger">Borrar</a>
            </td>
        </tr>
        @endforeach
    @endif 
  </tbody>
</table>
@stop
