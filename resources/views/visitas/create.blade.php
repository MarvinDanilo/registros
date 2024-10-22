@extends('layouts.app')
@section('title', 'Visitas')

<style>
    body { font-family: 'Arial', sans-serif; background: #e0e0e0; padding: 20px; }
    .container { max-width: 600px; margin: 50px auto; padding: 30px; background: #ffffff; border-radius: 10px; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3); }
    h1 { text-align: center; color: #333333; font-size: 28px; }
    .form-group { margin-bottom: 15px; }
    label { display: block; color: #444444; font-weight: bold; margin-bottom: 5px; }
    input[type="text"], input[type="date"], input[type="time"] { width: 90%; padding: 10px; border: 1px solid #aaa; border-radius: 5px; margin-left: 15px; font-size: 16px; }
    input[type="text"]:focus { border-color: #4a90e2; background-color: #f1f1f1; }
    button { width: 50%; margin: 20px auto; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; }
    button:hover { background-color: #0056b3; }
</style>

@section('content')
<h1>Crear Visita</h1>
<h5>Formulario para crear Visitas</h5>
<hr>
<div class="container">
    <form action="/visitas/store" method="post">
        @csrf

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
            <label for="codigo_visitante">Seleccionar Visitante</label>
            <select id="codigo_visitante" name="codigo_visitante" required>
                <option value="">Seleccione un visitante</option>
                @foreach($visitantes as $visitante)
                    <option value="{{ $visitante->codigo }}">{{ $visitante->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="proposito">Propósito de la Visita</label>
            <input type="text" id="proposito" name="proposito" required>
        </div>

        <div class="form-group">
            <label for="fecha_visita">Fecha de Visita</label>
            <input type="date" id="fecha_visita" name="fecha_visita" required>
        </div>

        <div class="form-group">
            <label for="hora_entrada">Hora de Entrada</label>
            <input type="time" id="hora_entrada" name="hora_entrada" required>
        </div>

        <div class="form-group">
            <label for="hora_salida">Hora de Salida</label>
            <input type="time" id="hora_salida" name="hora_salida" required>
        </div>

        <center><button type="submit">Crear Visita</button></center>
    </form>
</div>
@endsection
