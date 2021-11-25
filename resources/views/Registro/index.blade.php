@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<table class="table table-light table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">Cedula</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Enfermera</th>
            <th scope="col">Puesto</th>
            <th scope="col">Vacuna</th>
            <th scope="col">Docis</th>
            <th scope="col">Fecha</th>
            <th scope="col">Siguiente Docis</th>
        </tr>
    </thead>
    <tbody>
    <tr>
                <td>441-prueba-100A</td>
                <td>Javier</td>
                <td>Lumbi</td>
                <td>EnfemeraPrueba</td>
                <td>INSS</td>
                <td>Astrazeneca</td>
                <td>1er</td>
                <td>10-NOV-2021</td>
                <td>UNICA</td>
            </tr>
    </tbody>
</table>
@stop