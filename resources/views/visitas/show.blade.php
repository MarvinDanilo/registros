<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')
    {{-- Definimos el título --}}
    @section('title', 'Visitas')
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            padding: 20px;
        }

        .table-container {
            max-width: 1200px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
            padding: 20px;
            margin: 0 auto;
        }

        .table-container h2 {
            text-align: center;
            color: #34495E;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: 700;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            font-size: 16px;
        }

        th {
            background-color: #2980B9;
            color: #ffffff;
            font-weight: 600;
            position: sticky;
            top: 0;
            z-index: 1;
        }

        tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tbody tr:hover {
            background-color: #d1e7fd;
        }

        /* Estilos Responsivos */
        @media (max-width: 768px) {
            .table-container h2 {
                font-size: 24px;
            }

            th, td {
                padding: 10px 12px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            th, td {
                padding: 8px 10px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    {{-- Definimos el contenido --}}
    @section('content')
    <div class="table-container">
        <h2>Lista de Visitas</h2>
        <table>
            <thead>
                <tr>
                    <th>ID Visita</th>
                    <th>ID Visitante</th>
                    <th>Propósito</th>
                    <th>Fecha de Visita</th>
                    <th>Hora de Entrada</th>
                    <th>Hora de Salida</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>V001</td>
                    <td>V001</td>
                    <td>Reunión de Trabajo</td>
                    <td>2024-09-01</td>
                    <td>10:00 AM</td>
                    <td>11:00 AM</td>
                </tr>
                <tr>
                    <td>V002</td>
                    <td>V002</td>
                    <td>Entrevista</td>
                    <td>2024-09-02</td>
                    <td>09:30 AM</td>
                    <td>10:30 AM</td>
                </tr>
                <tr>
                    <td>V003</td>
                    <td>V003</td>
                    <td>Visita de Cortesía</td>
                    <td>2024-09-03</td>
                    <td>02:00 PM</td>
                    <td>03:00 PM</td>
                </tr>
                <tr>
                    <td>V004</td>
                    <td>V004</td>
                    <td>Capacitación</td>
                    <td>2024-09-04</td>
                    <td>11:00 AM</td>
                    <td>12:30 PM</td>
                </tr>
                <tr>
                    <td>V005</td>
                    <td>V005</td>
                    <td>Evaluación</td>
                    <td>2024-09-05</td>
                    <td>01:00 PM</td>
                    <td>02:00 PM</td>
                </tr>
            </tbody>
        </table>
    </div>
    @endsection
</body>
</html>
