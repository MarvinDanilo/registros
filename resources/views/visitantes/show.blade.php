<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')
    {{-- Definimos el título --}}
    @section('title', 'Visitantes')

    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fa;
            /* Eliminado Flexbox para no afectar a todo el contenido */
            /* display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px; */
        }

        /* Contenedor de la Tabla */
        .custom-table-container {
            width: 100%;
            max-width: 1200px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            overflow-x: auto;
            padding: 20px;
            margin: 20px auto; /* Añadido margen para separar del contenido superior */
        }

        /* Título de la Tabla */
        .custom-table-container h2 {
            text-align: center;
            color: #34495E;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: 700;
        }

        /* Estilos de la Tabla */
        .custom-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px;
        }

        .custom-table th, .custom-table td {
            padding: 12px 15px;
            text-align: left;
            font-size: 16px;
        }

        .custom-table th {
            background-color: #2980B9;
            color: #ffffff;
            font-weight: 600;
            position: sticky;
            top: 0;
            z-index: 1;
        }

        .custom-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .custom-table tbody tr:hover {
            background-color: #d1e7fd;
        }

        /* Estilos Responsivos */
        @media (max-width: 768px) {
            .custom-table-container h2 {
                font-size: 24px;
            }

            .custom-table th, .custom-table td {
                padding: 10px 12px;
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .custom-table th, .custom-table td {
                padding: 8px 10px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    {{-- Definimos el contenido --}}
    @section('content')
        <h1>Visitantes</h1>
        <h5>Listado de Visitantes</h5>
        <hr>

        <!-- Contenedor de la Tabla -->
        <div class="custom-table-container">
            <h2>Lista de Visitantes</h2>
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>ID Visitantes</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Documento ID</th>
                        <th>Teléfono</th>
                        <th>Correo Electrónico</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>V001</td>
                        <td>Ana</td>
                        <td>Pérez</td>
                        <td>12345678</td>
                        <td>555-1234</td>
                        <td>ana.perez@example.com</td>
                        <td>1990-05-15</td>
                        <td>2024-04-20</td>
                    </tr>
                    <tr>
                        <td>V002</td>
                        <td>Carlos</td>
                        <td>Gómez</td>
                        <td>87654321</td>
                        <td>555-5678</td>
                        <td>carlos.gomez@example.com</td>
                        <td>1985-09-22</td>
                        <td>2024-04-22</td>
                    </tr>
                    <tr>
                        <td>V003</td>
                        <td>María</td>
                        <td>Lopez</td>
                        <td>11223344</td>
                        <td>555-9012</td>
                        <td>maria.lopez@example.com</td>
                        <td>1992-12-05</td>
                        <td>2024-04-25</td>
                    </tr>
                    <tr>
                        <td>V004</td>
                        <td>Juan</td>
                        <td>Martínez</td>
                        <td>44332211</td>
                        <td>555-3456</td>
                        <td>juan.martinez@example.com</td>
                        <td>1988-07-30</td>
                        <td>2024-04-28</td>
                    </tr>
                    <tr>
                        <td>V005</td>
                        <td>Lucía</td>
                        <td>Ramírez</td>
                        <td>55667788</td>
                        <td>555-7890</td>
                        <td>lucia.ramirez@example.com</td>
                        <td>1995-03-18</td>
                        <td>2024-05-01</td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection
</body>
</html>
