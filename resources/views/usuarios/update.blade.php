<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 {{-- Heredamos la estructura del archivo app.blade.php--}}
 @extends('layout.app')
 {{--Definimos el titulo--}}
 @section('title', 'Usuarios')
</head>
<style>
        body { font-family: 'Arial', sans-serif; background: #f0f0f0; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 50px auto; padding: 30px; background: #ffffff; border-radius: 10px; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2); }
        h1 { text-align: center; color: #333333; font-size: 28px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; color: #555555; font-weight: bold; margin-bottom: 5px; }
        input[type="text"], input[type="password"], select { width: 90%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; margin-left: 15px; font-size: 16px; }
        input[type="text"]:focus { border-color: #4a90e2; background-color: #e8f1fa; }
        input[type="password"]:focus { border-color: #e94e77; background-color: #ffe4e1; }
        select { background: #f9f9f9; }
        button { width: 50%; margin: 20px auto; padding: 10px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        .form-group:nth-child(odd) { background-color: #e9ecef; }
        .form-group:nth-child(even) { background-color: #f8f9fa; }
        .container::before { content: ''; display: block; width: 100px; height: 5px; background: #4a90e2; margin: 0 auto 20px; }
        .form-group select { padding: 10px; }
    </style>
<body>
{{--Definimos el contenido--}}
@section('content')
 <h1>Modificar</h1>
 <h5>Formulario para actualizar Usuarios</h5>
 <hr>
 <div class="container">
        <h1>Modificar Usuario</h1>
        <form action="#" method="post">
            <div class="form-group"><label for="ID_usuario">ID Usuario</label><input type="text" id="ID_usuario" name="ID_usuario" required></div>
            <div class="form-group"><label for="Nombre">Nombre</label><input type="text" id="Nombre" name="Nombre" required></div>
            <div class="form-group"><label for="Contrasena">Contraseña</label><input type="password" id="Contrasena" name="Contrasena" required></div>
            <div class="form-group"><label for="Rol">Rol</label><select id="Rol" name="Rol" required><option value="">Seleccione un rol</option><option value="admin">Administrador</option><option value="usuario">Usuario</option><option value="moderador">Moderador</option></select></div>
            <div class="form-group"><label for="Fecha_Registro">Fecha de Registro</label><input type="date" id="Fecha_Registro" name="Fecha_Registro" required></div>
            <center><button type="submit"> Actualizar</button></center>
        </form>
    </div>
 @endsection
</body>
</html>