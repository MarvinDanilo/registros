
{{-- Heredamos la estructura del archivo app.blade.php--}}
@extends('layouts.app')
{{-- Definimos el título --}}
@section('title', 'Usuarios')

<style>
    body { font-family: 'Arial', sans-serif; background: #f0f0f0; margin: 0; padding: 20px; }
    .container { max-width: 600px; margin: 50px auto; padding: 30px; background: #ffffff; border-radius: 10px; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); }
    h1 { text-align: center; color: #333333; font-size: 28px; }
    .form-group { margin-bottom: 15px; }
    label { display: block; color: #555555; font-weight: bold; margin-bottom: 5px; }
    input[type="text"], input[type="password"], select { width: 90%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-left: 15px; font-size: 16px; }
    button { width: 50%; margin: 20px auto; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; }
</style>

{{-- Definimos el contenido --}}
@section('content')
    <h1>Crear</h1>
    <h5>Formulario para crear Usuarios</h5>
    <hr>
    <div class="container">
        <form action="/usuarios/store" method="POST">
            @csrf
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" id="Nombre" name="Nombre" required>
                @error('Nombre')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span> 
                @enderror
            </div>

            <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" required>
                @error('contrasena')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span> 
                @enderror
            </div>

            <div class="form-group">
                <label for="rol">Rol</label>
                <select id="rol" name="rol" required>
                    <option value="">Seleccione un rol</option>
                    <option value="admin">Administrador</option>
                    <option value="usuario">Usuario</option>
                </select>
                @error('rol')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span> 
                @enderror
            </div>

            <div class="form-group">
                <label for="fecha_registro">Fecha de Registro</label>
                <input type="date" id="fecha_registro" name="fecha_registro" required>
            </div>

            <center><button type="submit">Crear Usuario</button></center>
        </form>
    </div>
@endsection
