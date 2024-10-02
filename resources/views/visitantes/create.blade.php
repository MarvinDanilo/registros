<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 {{-- Heredamos la estructura del archivo app.blade.php--}}
 @extends('layout.app')
 {{--Definimos el titulo--}}
 @section('title', 'Visitantes')
</head>
<style>
        body{font-family:Arial,sans-serif;background-color:#f5f7fa;}
        .container{width:500px;margin:50px auto;padding:20px;background-color:#fff;box-shadow:0 10px 30px rgba(0,0,0,0.1);}
        h1{text-align:center;color:#333;}
        label{display:block;margin-top:10px;color:#555;}
        input{width:100%;padding:10px;margin-top:5px;border:1px solid #ddd;border-radius:4px;}
        input:focus{border-color:#007bff;outline:none;box-shadow:0 0 5px rgba(0,123,255,0.5);}
        button{width:100%;padding:12px;background-color:#007bff;color:#fff;border:none;border-radius:4px;cursor:pointer;margin-top:20px;}
        button:hover{background-color:#0056b3;}
    </style>
<body>
{{--Definimos el contenido--}}
@section('content')
 <h1>Crear</h1>
 <h5>Formulario para crear visitantes</h5>
 <hr>
 <div class="container">
        <h1>Crear Visitante</h1>
        <form>
            <label>ID Visitante</label>
            <input type="text" name="id_visitantes" required>
            
            <label>Nombre</label>
            <input type="text" name="nombre" required>
            
            <label>Apellido</label>
            <input type="text" name="apellido" required>
            
            <label>Documento ID</label>
            <input type="text" name="documento_id" required>
            
            <label>Teléfono</label>
            <input type="tel" name="telefono" required>
            
            <label>Correo Electrónico</label>
            <input type="email" name="correo_electronico" required>
            
            <label>Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" required>
            
            <label>Fecha de Registro</label>
            <input type="date" name="fecha_registro" required>
            
            <button type="submit">Crear</button>
        </form>
    </div>
 
 
 @endsection
</body>
</html>
