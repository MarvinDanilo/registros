
{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')
{{-- Definimos el título --}}
@section('title', 'Trámites')

<style>
    /* Estilos para el formulario */
    body { font-family: 'Arial', sans-serif; background-color: #f0f0f0; padding: 20px; }
    .container { max-width: 600px; margin: 50px auto; padding: 30px; background: #ffffff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); }
    h1 { text-align: center; color: #333; }
    .form-group { margin-bottom: 15px; }
    label { display: block; font-weight: bold; margin-bottom: 5px; }
    input[type="text"], input[type="date"], select { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
    input[type="text"]:focus, select:focus { border-color: #007bff; }
    button { width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; }
    button:hover { background-color: #218838; }
    .form-group:nth-child(odd) { background-color: #f8f9fa; }
    .form-group:nth-child(even) { background-color: #e9ecef; }
</style>

{{-- Definimos el contenido --}}
@section('content')
<h1>Crear Trámite</h1>
<h5>Formulario para crear Trámites</h5>
<hr>
<div class="container">
    <form action="/tramites/store" method="post">
        @csrf

        {{-- Campo para seleccionar el Visitante --}}
        <div class="form-group">
            <label for="id_visitante">Seleccionar Visitante</label>
            <select id="id_visitante" name="id_visitante" required>
                <option value="">Seleccione un visitante</option>
                @foreach($visitantes as $visitante)
                    <option value="{{ $visitante->codigo }}">{{ $visitante->nombre }}</option>
                @endforeach
            </select>
        </div>

        {{-- Campo para seleccionar la Visita --}}
        <div class="form-group">
            <label for="id_visita">Seleccionar Visita</label>
            <select id="id_visita" name="id_visita" required>
                <option value="">Seleccione una visita</option>
                @foreach($visitas as $visita)
                    <option value="{{ $visita->codigo }}">{{ $visita->proposito }}</option>
                @endforeach
            </select>
        </div>

        {{-- Campo para seleccionar el Usuario --}}
        <div class="form-group">
            <label for="id_usuario">Seleccionar Usuario</label>
            <select id="id_usuario" name="id_usuario" required>
                <option value="">Seleccione un usuario</option>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->codigo }}">{{ $usuario->Nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input type="text" id="descripcion" name="descripcion" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <select id="estado" name="estado" required>
                <option value="Pendiente">Pendiente</option>
                <option value="Aprobado">Aprobado</option>
                <option value="Rechazado">Rechazado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fecha_inicio">Fecha de Inicio</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio" required>
        </div>

        <div class="form-group">
            <label for="fecha_fin">Fecha Final</label>
            <input type="date" id="fecha_fin" name="fecha_fin" required>
        </div>

        <button type="submit">Crear Trámite</button>
    </form>
</div>
@endsection
