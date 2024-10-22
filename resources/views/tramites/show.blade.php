
{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')
{{-- Definimos el título --}}
@section('title', 'Listado de Trámites')

{{-- Definimos el contenido --}}
@section('content')
<h1>Trámites</h1>
<h5>Listado de Trámites</h5>
<hr>
{{-- Botón para ir al formulario de agregar nuevo trámite --}}
<a class="btn btn-danger btn-sm" href="/tramites/create">Agregar nuevo trámite</a>
<table class="table table-hover table-bordered mt-2">
    <thead>
        <tr>
            <th>Visitante</th>
            <th>Descripción de la Visita</th>
            <th>Usuario</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Fecha Inicio</th>
            <th>Fecha Final</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        {{-- Listado de trámites --}}
        @foreach ($tramites as $item) 
        <tr>
            <td>{{ $item->visitante->nombre }}</td> {{-- Mostrar el nombre del visitante --}}
            <td>{{ $item->visita->proposito }}</td> {{-- Mostrar el propósito de la visita --}}
            <td>{{ $item->usuario->nombre }}</td> {{-- Mostrar el nombre del usuario --}}
            <td>{{ $item->descripcion }}</td>
            <td>{{ $item->estado }}</td>
            <td>{{ $item->fecha_inicio }}</td>
            <td>{{ $item->fecha_fin }}</td>
            <td>
                <a class="btn btn-success btn-sm" href="/tramites/edit/{{$item->codigo}}">Modificar</a>
                <button class="btn btn-danger btn-sm" onclick="destroy(this)" url="/tramites/destroy/{{$item->codigo}}" token="{{ csrf_token() }}">Eliminar</button>
            
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')
{{-- SweetAlert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- JS --}}
<script src="{{ asset('js/visita.js') }}"></script>
@endsection
