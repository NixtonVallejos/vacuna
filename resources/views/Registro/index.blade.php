@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<table class="table table-light table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tiempo</th>
            <th scope="col">id paciente</th>
            <th scope="col">id enfermero</th>
            <th scope="col">id vacuna</th>
            <th scope="col">id centro</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registro as $reg)
        <tr>
            <td> {{ $reg->id }}</td>
            <td> {{ $reg->administrada_a }}</td>
            <td> {{ $reg->paciente_id }}</td>
            <td> {{ $reg->enfermero_id }}</td>
            <td> {{ $reg->vacuna_id }}</td>
            <td> {{ $reg->centro_id }}</td>
            <td>
                <form action="{{route ('registro.destroy', $reg->id)}}" method="POST">
                    <a href="/registro/{{ $reg->id }}/edit" class="btn btn-info">Editar</a>
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