<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 {{-- Heredamos la estructura del archivo app.blade.php--}}
 @extends('layout.app')
 {{--Definimos el titulo--}}
 @section('title', 'Tramites')
</head>
<style>
        body { font-family: 'Arial', sans-serif; background-color: #f0f0f0; padding: 20px; }
        .container { max-width: 600px; margin: 50px auto; padding: 30px; background: #ffffff; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); }
        h1 { text-align: center; color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input[type="text"], input[type="date"], input[type="time"], select { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; }
        input[type="text"]:focus, select:focus { border-color: #007bff; }
        button { width: 100%; padding: 10px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #218838; }
        .form-group:nth-child(odd) { background-color: #f8f9fa; }
        .form-group:nth-child(even) { background-color: #e9ecef; }
    </style>

<body>
{{--Definimos el contenido--}}
@section('content')
 <h1>Modificar</h1>
 <h5>Formulario para actualizar Tramites</h5>
 <hr>
 <div class="container">
        <h1>Modificar Trámite</h1>
        <form action="#" method="post">
            <div class="form-group">
                <label for="ID_Tramite">ID Trámite</label>
                <input type="text" id="ID_Tramite" name="ID_Tramite" required>
            </div>
            <div class="form-group">
                <label for="ID_Visitante">ID Visitante</label>
                <input type="text" id="ID_Visitante" name="ID_Visitante" required>
            </div>
            <div class="form-group">
                <label for="ID_Visita">ID Visita</label>
                <input type="text" id="ID_Visita" name="ID_Visita" required>
            </div>
            <div class="form-group">
                <label for="Descripcion">Descripción</label>
                <input type="text" id="Descripcion" name="Descripcion" required>
            </div>
            <div class="form-group">
                <label for="Estado">Estado</label>
                <select id="Estado" name="Estado" required>
                    <option value="Pendiente">Pendiente</option>
                    <option value="Aprobado">Aprobado</option>
                    <option value="Rechazado">Rechazado</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Fecha_Inicio">Fecha de Inicio</label>
                <input type="date" id="Fecha_Inicio" name="Fecha_Inicio" required>
            </div>
            <div class="form-group">
                <label for="Fecha_Final">Fecha Final</label>
                <input type="date" id="Fecha_Final" name="Fecha_Final" required>
            </div>
            <div class="form-group">
                <label for="ID_Usuario">ID Usuario</label>
                <input type="text" id="ID_Usuario" name="ID_Usuario" required>
            </div>
            <button type="submit">Actualizar</button>
        </form>
    </div>
 @endsection
</body>
</html>