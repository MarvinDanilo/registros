
{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app')
{{-- Definimos el titulo --}}
@section('title', 'Visitantes')

{{-- Definimos el contenido --}}
@section('content')
<h1>Crear</h1>
<h5>Formulario para crear visitantes</h5>
<hr>
<div class="container">
<form action="/visitantes/store" method="POST">
    @csrf

    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" required>
    @error('nombre') 
    <span class="invalid-feedback d-block" role="alert">
    <strong>{{$message}}</strong>
    </span> 
    @enderror 
    
    <label>Teléfono</label>
    
    <input type="tel" name="telefono" class="form-control" class="form-control" pattern="[0-9]*" title="Solo se permiten números" required>


    @error('telefono') 
    <span class="invalid-feedback d-block" role="alert">
    <strong>{{$message}}</strong>
    </span> 
    @enderror
    
    <label>Correo Electrónico</label>
    <input type="email" name="correo_electronico" class="form-control" required>
    @error('correo_electronico') 
    <span class="invalid-feedback d-block" role="alert">
    <strong>{{$message}}</strong>
    </span> 
    @enderror

    <label>Fecha de Nacimiento</label>
    <input type="date" name="fecha_nacimiento" class="form-control" required>
    @error('fecha_nacimiento') 
    <span class="invalid-feedback d-block" role="alert">
    <strong>{{$message}}</strong>
    </span> 
    @enderror

    <label>Fecha de Registro</label>
    <input type="date" name="fecha_registro" class="form-control" required>
    @error('fecha_registro') 
    <span class="invalid-feedback d-block" role="alert">
    <strong>{{$message}}</strong>
    </span> 
    @enderror

    <div class="col-12 mt-2">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

</div>
@endsection


