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
        body { font-family: 'Arial', sans-serif; background: #f0f0f0; padding: 20px; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { padding: 12px; text-align: left; border: 1px solid #ddd; }
        th { background-color: #4a90e2; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        tr:hover { background-color: #ddd; }
        h1 { text-align: center; }
    </style>
<body>
{{--Definimos el contenido--}}
@section('content')
 <h1>Usuarios</h1>
 <h5>Listado de Usuarios</h5>
 <hr>
 <h1>Usuarios Registrados</h1>
    <table>
        <thead>
            <tr>
                <th>ID Usuario</th>
                <th>Nombre</th>
                <th>Contraseña</th>
                <th>Rol</th>
                <th>Fecha de Registro</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Juan Pérez</td>
                <td>contraseña123</td>
                <td>Administrador</td>
                <td>2024-01-15</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ana Gómez</td>
                <td>miContraseña456</td>
                <td>Usuario</td>
                <td>2024-02-20</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Carlos López</td>
                <td>segura789</td>
                <td>Moderador</td>
                <td>2024-03-05</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Laura Martínez</td>
                <td>laura1234</td>
                <td>Usuario</td>
                <td>2024-04-10</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Pedro Sánchez</td>
                <td>pedro5678</td>
                <td>Administrador</td>
                <td>2024-05-25</td>
            </tr>
        </tbody>
    </table>
 @endsection
</body>
</html>