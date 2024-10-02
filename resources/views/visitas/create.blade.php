<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')
    {{-- Definimos el titulo --}}
    @section('title', 'Visitas')
    <style>
        body { font-family: 'Arial', sans-serif; background: #e0e0e0; padding: 20px; }
        .container { max-width: 600px; margin: 50px auto; padding: 30px; background: #ffffff; border-radius: 10px; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3); }
        h1 { text-align: center; color: #333333; font-size: 28px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; color: #444444; font-weight: bold; margin-bottom: 5px; }
        input[type="text"], input[type="date"], input[type="email"], input[type="tel"] { width: 90%; padding: 10px; border: 1px solid #aaa; border-radius: 5px; margin-left: 15px; font-size: 16px; }
        input[type="text"]:focus, input[type="email"]:focus, input[type="tel"]:focus { border-color: #4a90e2; background-color: #f1f1f1; }
        button { width: 50%; margin: 20px auto; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .form-group:nth-child(odd) { background-color: #e9ecef; }
        .form-group:nth-child(even) { background-color: #f8f9fa; }
        .container::before { content: ''; display: block; width: 100px; height: 5px; background: #4a90e2; margin: 0 auto 20px; }
    </style>
</head>
<body>
    {{-- Definimos el contenido --}}
    @section('content')
    <h1>Crear Visita</h1>
        <h5>Formulario para crear Visitas</h5>
        <hr>
    <div class="container">
    <h1>Crear Visita</h1>  
        <form action="#" method="post">
            <div class="form-group">
                <label for="ID_Visitantes">ID Visitantes</label>
                <input type="text" id="ID_Visitantes" name="ID_Visitantes" required>
            </div>
            <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" id="Nombre" name="Nombre" required>
            </div>
            <div class="form-group">
                <label for="Apellido">Apellido</label>
                <input type="text" id="Apellido" name="Apellido" required>
            </div>
            <div class="form-group">
                <label for="Documento_ID">Documento ID</label>
                <input type="text" id="Documento_ID" name="Documento_ID" required>
            </div>
            <div class="form-group">
                <label for="Telefono">Teléfono</label>
                <input type="tel" id="Telefono" name="Telefono" required>
            </div>
            <div class="form-group">
                <label for="Correo_Electronico">Correo Electrónico</label>
                <input type="email" id="Correo_Electronico" name="Correo_Electronico" required>
            </div>
            <div class="form-group">
                <label for="Fecha_Nacimiento">Fecha de Nacimiento</label>
                <input type="date" id="Fecha_Nacimiento" name="Fecha_Nacimiento" required>
            </div>
            <div class="form-group">
                <label for="Fecha_Registro">Fecha de Registro</label>
                <input type="date" id="Fecha_Registro" name="Fecha_Registro" required>
            </div>
            <center><button type="submit">Crear Visita</button></center>
        </form>
    </div>
    @endsection
</body>
</html>

