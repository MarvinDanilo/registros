
{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')
{{-- Definimos el título --}}
@section('title', 'Visitantes')

{{-- Definimos el contenido --}}
@section('content')
<h1>Visitantes</h1>
<h5>Listado de Visitantes</h5>
<hr>
{{-- Botón para ir al formulario de agregar producto --}}
<a class="btn btn-danger btn-sm" href="/visitantes/create">Agregar nuevo visitante</a>
<table class="table table-hover table-bordered mt-2">
    <tr>
        <td>Código</td>
        <td>Nombre</td>
        <td>Teléfono</td>
        <td>Correo Electrónico</td>
        <td>Fecha de Nacimiento</td>
        <td>Fecha de Registro</td>
        <td>Acciones</td>
    </tr>
    {{-- Listado de visitantes --}}
    @foreach ($visitantes as $item) 
    <tr>
        <td>{{ $item->codigo }}</td>
        <td>{{ $item->nombre }}</td>
        <td>{{ $item->telefono }}</td>
        <td>{{ $item->correo_electronico }}</td>
        <td>{{ $item->fecha_nacimiento }}</td>
        <td>{{ $item->fecha_registro }}</td>
        <td>
            <a class="btn btn-success btn-sm" href="/visitantes/edit/{{$item->codigo}}">Modificar</a>
            <button class="btn btn-danger btn-sm" url="/visitantes/destroy/{{$item->codigo}}" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>
           
        </td>
    </tr> 
    @endforeach
</table>
@endsection

@section('scripts') 
{{-- SweetAlert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- JS --}}
<script src="{{ asset('js/visitante.js') }}"></script>
@endsection





