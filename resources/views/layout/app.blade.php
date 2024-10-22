<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
</head>
<body>
    {{-- Nuestro menú --}}
    <nav class="navbar navbar-expand-lg bg-black navbar-dark mb-4">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarVisitantes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Visitantes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarVisitantes">
                        <li><a class="dropdown-item" href="/visitantes/create"></a></li>
                        <li><a class="dropdown-item" href="/visitantes/show">Mostrar</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarUsuarios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Usuarios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarUsuarios">
                        <li><a class="dropdown-item" href="/usuarios/create"></a></li>
                        <li><a class="dropdown-item" href="/usuarios/show">Mostrar</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarVisitas" role="button" data-bs-toggle="dropdown" aria-expanded="false"  >
                        Visitas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarVisitas">
                        <li><a class="dropdown-item" href="/visitas/create"></a></li>
                        <li><a class="dropdown-item" href="/visitas/show">Mostrar</a></li>
                    </ul>
                </li>

                <!-- Dropdown para Más Opciones -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarMasOpciones" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Más Opciones
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarMasOpciones">
                        <li><a class="dropdown-item" href="/tramites/show">Trámites</a></li>
                        <li><a class="dropdown-item" href="/informes/show">Informes</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        @yield('content') 
    </div>
</body>
</html>
{{-- Scripts --}}
@yield('scripts')
