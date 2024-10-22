@extends('layouts.app')
@section('title', 'Visitas')

@section('content')
<h1>Visitas</h1>
<h5>Listado de Visitas</h5>
<hr>
<a class="btn btn-danger btn-sm" href="/visitas/create">Agregar nueva visita</a>
<table class="table table-hover table-bordered mt-2">
    <thead>
        <tr>
            <th>Código Visitante</th>
            <th>ID Usuario</th>
            <th>Propósito</th>
            <th>Fecha de Visita</th>
            <th>Hora Entrada</th>
            <th>Hora Salida</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($visitas as $item)
        <tr>
            <td>{{ $item->id_visitante }}</td>
            <td>{{ $item->id_usuario }}</td>
            <td>{{ $item->proposito }}</td>
            <td>{{ $item->fecha_visita }}</td>
            <td>{{ $item->hora_entrada }}</td>
            <td>{{ $item->hora_salida }}</td>
            <td>
                <a class="btn btn-success btn-sm" href="/visitas/edit/{{$item->codigo}}">Modificar</a>
                <button class="btn btn-danger btn-sm" onclick="destroy(this)" url="/visitas/destroy/{{$item->codigo}}" token="{{ csrf_token() }}">
                    Eliminar
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/visita.js') }}"></script>
@endsection
