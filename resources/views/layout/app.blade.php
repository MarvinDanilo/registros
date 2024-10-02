<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 {{-- Aquí irá el título de cada página--}}
 <title>@yield('title')</title>
 @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
</head>
<body>
{{-- Nuestro menú --}}
<nav class="navbar navbar-expand-lg bg-secondary navbar-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Inventario</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Inicio</a>
        </li>

        <!-- Dropdown para Visitantes -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarVisitantes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Visitantes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarVisitantes">
            <li><a class="dropdown-item" href="/visitantes/create">Create</a></li>
            <li><a class="dropdown-item" href="/visitantes/show">Show</a></li>
            <li><a class="dropdown-item" href="/visitantes/edit">Update</a></li>
          </ul>
        </li>

        <!-- Dropdown para Usuarios -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarUsuarios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuarios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarUsuarios">
            <li><a class="dropdown-item" href="/usuarios/create">Create</a></li>
            <li><a class="dropdown-item" href="/usuarios/show">Show</a></li>
            <li><a class="dropdown-item" href="/usuarios/edit">Update</a></li>
          </ul>
        </li>

        <!-- Dropdown para Visitas -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarVisitas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Visitas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarVisitas">
            <li><a class="dropdown-item" href="/visitas/create">Create</a></li>
            <li><a class="dropdown-item" href="/visitas/show">Show</a></li>
            <li><a class="dropdown-item" href="/visitas/edit">Update</a></li>
          </ul>
        </li>

        <!-- Dropdown para Trámites -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarTramites" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Trámites
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarTramites">
            <li><a class="dropdown-item" href="/tramites/create">Create</a></li>
            <li><a class="dropdown-item" href="/tramites/show">Show</a></li>
            <li><a class="dropdown-item" href="/tramites/edit">Update</a></li>
          </ul>
        </li>

        <!-- Dropdown para Informes -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarInformes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarInformes">
            <li><a class="dropdown-item" href="/informes/create">Create</a></li>
            <li><a class="dropdown-item" href="/informes/show">Show</a></li>
            <li><a class="dropdown-item" href="/informes/edit">Update</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  {{-- Aquí irá el contenido de todas las páginas --}}
  @yield('content') 
</div>

</body>
</html>