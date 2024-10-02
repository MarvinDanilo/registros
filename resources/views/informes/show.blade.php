<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 {{-- Heredamos la estructura del archivo app.blade.php--}}
 @extends('layout.app')
 {{--Definimos el titulo--}}
 @section('title', 'Informes')
</head>
<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #d1e7fd;
        }
    </style>
<body>
{{--Definimos el contenido--}}
@section('content')
 <h1>Informes</h1>
 <h5>Listado de Informes</h5>
 <hr>
 <h1>Informes Registrados</h1>
    <table>
        <thead>
            <tr>
                <th>ID Informe</th>
                <th>Tipo de Informe</th>
                <th>Fecha de Informe</th>
                <th>Archivo PDF</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>I001</td>
                <td>Informe Financiero</td>
                <td>2024-09-15</td>
                <td><a href="informe1.pdf" target="_blank">Descargar</a></td>
            </tr>
            <tr>
                <td>I002</td>
                <td>Informe de Ventas</td>
                <td>2024-09-20</td>
                <td><a href="informe2.pdf" target="_blank">Descargar</a></td>
            </tr>
            <tr>
                <td>I003</td>
                <td>Informe de Recursos Humanos</td>
                <td>2024-09-25</td>
                <td><a href="informe3.pdf" target="_blank">Descargar</a></td>
            </tr>
            <tr>
                <td>I004</td>
                <td>Informe de Proyectos</td>
                <td>2024-09-28</td>
                <td><a href="informe4.pdf" target="_blank">Descargar</a></td>
            </tr>
            <tr>
                <td>I005</td>
                <td>Informe de Auditoría</td>
                <td>2024-10-01</td>
                <td><a href="informe5.pdf" target="_blank">Descargar</a></td>
            </tr>
        </tbody>
    </table>

 @endsection
</body>
</html>