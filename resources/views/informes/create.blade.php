
 {{-- Heredamos la estructura del archivo app.blade.php--}}
 @extends('layouts.app')
 {{--Definimos el titulo--}}
 @section('title', 'Informes')
</head>
<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="date"], input[type="file"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="text"]:focus, select:focus {
            border-color: #007bff;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .form-group:nth-child(odd) {
            background-color: #f9f9f9;
        }
        .form-group:nth-child(even) {
            background-color: #e9ecef;
        }
    </style>

{{--Definimos el contenido--}}
@section('content')
 <h1>Crear</h1>
 <h5>Formulario para crear informes</h5>
 <hr>
 <div class="container">
        <h1>Crear Informe</h1>
        <form action="#" method="post" enctype="multipart/form-data">
           
            <div class="form-group">
                <label for="Tipo_Informe">Tipo de Informe</label>
                <input type="text" id="Tipo_Informe" name="Tipo_Informe" required>
            </div>
            <div class="form-group">
                <label for="Fecha_Informe">Fecha de Informe</label>
                <input type="date" id="Fecha_Informe" name="Fecha_Informe" required>
            </div>
            <div class="form-group">
                <label for="Archivo_PDF">Archivo PDF</label>
                <input type="file" id="Archivo_PDF" name="Archivo_PDF" accept=".pdf" required>
            </div>
            <button type="submit">Crear Informe</button>
        </form>
    </div>
 @endsection


