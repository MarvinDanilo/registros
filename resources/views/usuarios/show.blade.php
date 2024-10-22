{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')
{{-- Definimos el título --}}
@section('title', 'Usuarios')

{{-- Definimos el contenido --}}
@section('content')
    <h1>Usuarios</h1>
    <h5>Listado de Usuarios</h5>
    <hr>
    {{-- Botón para ir al formulario de agregar usuario --}}
    <a class="btn btn-danger btn-sm" href="/usuarios/create">Agregar nuevo usuario</a>
    <table class="table table-hover table-bordered mt-2">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Fecha de Registro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($usuarios as $item)
        <tr>
            <td>{{ $item->Nombre }}</td>
            <td>{{ $item->rol }}</td> <!-- Asegúrate de que este sea el nombre correcto del campo -->
            <td>{{ $item->fecha_registro }}</td> <!-- Asegúrate de que este sea el nombre correcto del campo -->
            <td>
                <a class="btn btn-success btn-sm" href="/usuarios/edit/{{$item->codigo}}">Modificar</a>
                
                <button class="btn btn-danger btn-sm" onclick="destroy(this)" url="/usuarios/destroy/{{$item->codigo}}" token="{{ csrf_token() }}">Eliminar</button>
                
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
    <script src="{{ asset('js/usuario.js') }}"></script>
@endsection
