
{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layouts.app') 
{{-- Definimos el título --}}
@section('title', 'Visitantes')

{{-- Definimos el contenido --}}
@section('content')
<h1>Modificar</h1>
<h5>Formulario para actualizar Visitantes</h5>
<hr>
<div class="container">
    <form action="/visitantes/update/{{$visitante->codigo}}" method="POST">
        @csrf
        @method('PUT') 
       
        <div class="form-group">
            <label for="Nombre">Nombre</label>
            <input type="text" id="Nombre" name="nombre" class="form-control" value="{{$visitante->nombre}}" required>
            @error('nombre') 
            <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
            </span> 
            @enderror
        </div>

        <div class="form-group">
            <label for="Telefono">Teléfono</label>
           
            <input type="tel" id="Telefono" name="telefono" class="form-control" class="form-control" pattern="[0-9]*" title="Solo se permiten números" value="{{$visitante->telefono}}" required>
            @error('telefono') 
            <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
            </span> 
            @enderror
        </div>

        <div class="form-group">
            <label for="Correo_Electronico">Correo Electrónico</label>
            <input type="email" id="Correo_Electronico" name="correo_electronico" class="form-control" value="{{$visitante->correo_electronico}}" required >
            @error('correo_electronico') 
            <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
            </span> 
            @enderror
        </div>

        <div class="form-group">
            <label for="Fecha_Nacimiento">Fecha de Nacimiento</label>
            <input type="date" id="Fecha_Nacimiento" name="fecha_nacimiento" class="form-control" value="{{$visitante->fecha_nacimiento}}" required>
            @error('fecha_nacimiento') 
            <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
            </span> 
            @enderror
        </div>

        <div class="form-group">
            <label for="Fecha_Registro">Fecha de Registro</label>
            <input type="date" id="Fecha_Registro" name="fecha_registro" class="form-control" value="{{$visitante->fecha_registro}}" required>
            @error('fecha_registro') 
            <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
            </span> 
            @enderror
        </div>

        <div class="col-12 mt-2">
            <button class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>
@endsection

