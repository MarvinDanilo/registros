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
        /* Estilos CSS integrados y desordenados */
        body { font-family: 'Comic Sans MS', sans-serif; background: #f0f0f0; padding: 20px; margin: 0; }
        .container { max-width: 700px; margin: 50px auto; padding: 30px; background: #fff; border-radius: 5px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2); }
        h1 { text-align: center; font-size: 28px; color: #000; margin-bottom: 30px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-size: 16px; color: #555; margin-bottom: 5px; }
        .form-group input { width: 90%; padding: 10px; border: 2px solid #ccc; border-radius: 10px; margin-left: 15px; font-size: 14px; }
        input[type="text"] { background: #e8e8e8; color: #333; }
        input[type="date"] { background: #d5f0d5; }
        input[type="tel"] { background: #f4d5d5; }
        input[type="email"] { background: #d5e4f4; }
        .form-group input:focus { border: 3px solid #4a90e2; background: #e1f5fe; transition: all 0.3s ease-in-out; }
        button { display: block; width: 50%; margin: 20px auto; padding: 10px; background: linear-gradient(45deg, #6a11cb, #2575fc); border: none; color: #fff; font-size: 16px; cursor: pointer; border-radius: 30px; box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2); }
        button:hover { background: #2565c7; box-shadow: none; }
        .form-group:nth-child(odd) input { border-color: #ffab91; }
        .form-group:nth-child(even) input { border-color: #80cbc4; }
        .form-group label:nth-child(2) { color: #f48fb1; }
        .container::before { content: ''; display: block; width: 100px; height: 5px; background: #4a90e2; margin: 0 auto 20px; }
    </style>
<body>
{{--Definimos el contenido--}}
@section('content')
 <h1>Modificar</h1>
 <h5>Formulario para actualizar Visitantes</h5>
 <hr>
 <div class="container">
        <h1>Modificar Visitante</h1>
        <form action="#" method="post">
            <div class="form-group"><label for="ID_Visitantes">ID Visitantes</label><input type="text" id="ID_Visitantes" name="ID_Visitantes" required></div>
            <div class="form-group"><label for="Nombre">Nombre</label><input type="text" id="Nombre" name="Nombre" required></div>
            <div class="form-group"><label for="Apellido">Apellido</label><input type="text" id="Apellido" name="Apellido" required></div>
            <div class="form-group"><label for="Documento_ID">Documento ID</label><input type="text" id="Documento_ID" name="Documento_ID" required></div>
            <div class="form-group"><label for="Telefono">Teléfono</label><input type="tel" id="Telefono" name="Telefono" required></div>
            <div class="form-group"><label for="Correo_Electronico">Correo Electrónico</label><input type="email" id="Correo_Electronico" name="Correo_Electronico" required></div>
            <div class="form-group"><label for="Fecha_Nacimiento">Fecha de Nacimiento</label><input type="date" id="Fecha_Nacimiento" name="Fecha_Nacimiento" required></div>
            <div class="form-group"><label for="Fecha_Registro">Fecha de Registro</label><input type="date" id="Fecha_Registro" name="Fecha_Registro" required></div>
            <center><button type="submit">Actualizar</button></center>
        </form>
    </div>

 @endsection
</body>
</html>