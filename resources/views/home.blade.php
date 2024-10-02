<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 {{-- Heredamos la estructura del archivo app.blade.php--}}
 @extends('layout.app')
 {{--Definimos el titulo--}}
 @section('title', 'Inicio')
 @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
</head>
<body>
 {{--Definimos el contenido--}}
 @section('content')
 <div class="container-fluid">
 <h1>Pantalla de inicio</h1>
 </div>  

  <!-- Imprimimos el nombre -->
  nombre: <b>{{$nombre}}</b>
   <!-- Imprimimos el apellido -->
 apellido: <b>{{$apellido}}</b>
 @endsection
</body>
</html>