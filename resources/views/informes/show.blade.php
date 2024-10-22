
 {{-- Heredamos la estructura del archivo app.blade.php--}}
 @extends('layouts.app')
 {{--Definimos el titulo--}}
 @section('title', 'Informes')


{{--Definimos el contenido--}}
@section('content')
 <h1>Informes</h1>
 <h5>Listado de Informes</h5>
 <hr>
 {{-- Botón para ir al formulario de agregar producto --}}
    <a class="btn btn-danger btn-sm" href="/informes/create">Agregar nuevo informe</a>
    <table class="table table-hover table-bordered mt-2">
        <thead>
            <tr>
                <th>id</th>
                <th>Tipo de Informe</th>
                <th>Fecha de Informe</th>
                <th>Archivo pdf</th>
            </tr>
        </thead>
        <tbody>
            {{-- Listado de productos --}}
            
                        <a class="btn btn-success btn-sm" href="">Modificar</a>
                        <button class="btn btn-danger btn-sm" 
                                onclick="destroy(this)" 
                                url="" 
                                token="{{ csrf_token() }}">
                            Eliminar
                        </button>
                   
           
        </tbody>
    </table>
 @endsection
 @section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{ asset('js/cliente.js') }}"></script>
@endsection
