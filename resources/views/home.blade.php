<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 {{-- Heredamos la estructura del archivo app.blade.php--}}
 @extends('layouts.app')
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

  
 @endsection
</body>
</html>