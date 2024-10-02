<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['nombre'=>'Marvin'],['apellido'=>'Ruiz']);
});
// Ruta para mostrar la vista show.blade.php
 Route::get('/informes/show', function () { 
    return view('informes/show'); 
}); 
// Ruta para mostrar la vista create.blade.php
Route::get('/informes/create', function () { 
    return view('informes/create'); 
}); 
// Ruta para mostrar la vista update.blade.php
Route::get('/informes/edit', function () { 
    return view('informes/update'); 
}); 
// Ruta para mostrar la vista show.blade.php
Route::get('/visitantes/show', function () { 
    return view('visitantes/show'); 
}); 
//Ruta para mostrar la vista create.blade.php
Route::get('/visitantes/create', function () { 
    return view('visitantes/create'); 
}); 
// Ruta para mostrar la vista update.blade.php
Route::get('/visitantes/edit', function () { 
    return view('visitantes/update'); 
}); 
// Ruta para mostrar la vista show.blade.php
Route::get('/usuarios/show', function () { 
    return view('usuarios/show'); 
}); 
// Ruta para mostrar la vista create.blade.php
Route::get('/usuarios/create', function () { 
    return view('usuarios/create'); 
}); 
// Ruta para mostrar la vista update.blade.php
Route::get('/usuarios/edit', function () { 
    return view('usuarios/update'); 
}); 
// Ruta para mostrar la vista show.blade.php
Route::get('/visitas/show', function () { 
    return view('visitas/show'); 
}); 
// Ruta para mostrar la vista create.blade.php
Route::get('/visitas/create', function () { 
    return view('visitas/create'); 
}); 
// Ruta para mostrar la vista update.blade.php
Route::get('/visitas/edit', function () { 
    return view('visitas/update'); 
}); 
// Ruta para mostrar la vista show.blade.php
Route::get('/tramites/show', function () { 
    return view('tramites/show'); 
}); 
// Ruta para mostrar la vista create.blade.php
Route::get('/tramites/create', function () { 
    return view('tramites/create'); 
}); 
// Ruta para mostrar la vista update.blade.php
Route::get('/tramites/edit', function () { 
    return view('tramites/update'); 
}); 