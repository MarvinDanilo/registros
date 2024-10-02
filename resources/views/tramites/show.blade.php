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
 <h1>Tramites</h1>
 <h5>Listado de tramites</h5>
 <hr>
 <center><h1>Trámites Registrados</h1></center>
    <table>
        <thead>
            <tr>
                <th>ID Trámite</th>
                <th>ID Visitante</th>
                <th>ID Visita</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Fecha de Inicio</th>
                <th>Fecha Final</th>
                <th>ID Usuario</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>T001</td>
                <td>V001</td>
                <td>VIS001</td>
                <td>Solicitud de Información</td>
                <td>Pendiente</td>
                <td>2024-10-01</td>
                <td>2024-10-10</td>
                <td>U001</td>
            </tr>
            <tr>
                <td>T002</td>
                <td>V002</td>
                <td>VIS002</td>
                <td>Inscripción a Taller</td>
                <td>Aprobado</td>
                <td>2024-10-02</td>
                <td>2024-10-15</td>
                <td>U002</td>
            </tr>
            <tr>
                <td>T003</td>
                <td>V003</td>
                <td>VIS003</td>
                <td>Solicitud de Permiso</td>
                <td>Rechazado</td>
                <td>2024-10-03</td>
                <td>2024-10-20</td>
                <td>U003</td>
            </tr>
            <tr>
                <td>T004</td>
                <td>V004</td>
                <td>VIS004</td>
                <td>Consulta Médica</td>
                <td>Pendiente</td>
                <td>2024-10-04</td>
                <td>2024-10-12</td>
                <td>U004</td>
            </tr>
            <tr>
                <td>T005</td>
                <td>V005</td>
                <td>VIS005</td>
                <td>Revisión de Documentos</td>
                <td>Aprobado</td>
                <td>2024-10-05</td>
                <td>2024-10-18</td>
                <td>U005</td>
            </tr>
        </tbody>
    </table>
 @endsection
</body>
</html>