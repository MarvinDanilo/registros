<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitanteController; 
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VisitaController;
use App\Http\Controllers\TramiteController;

Route::get('/home', function () {
    return view('home', ['nombre'=>'Marvin'],['apellido'=>'Ruiz'],);
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
 

Route::get('/', function () { 
    return view('home'); 
}); 

// Rutas para Visitantes
Route::get('/visitantes/show', [VisitanteController::class, 'index']); 
Route::get('/visitantes/create', [VisitanteController::class, 'create']); 
Route::get('/visitantes/edit/{visitante}', [VisitanteController::class, 'edit']); 
Route::post('/visitantes/store', [VisitanteController::class, 'store']); 
Route::put('/visitantes/update/{visitante}', [VisitanteController::class, 'update']); 
Route::delete('/visitantes/destroy/{codigo}', [VisitanteController::class, 'destroy']);



// Ruta para mostrar la vista 'show.blade.php' de usuarios
Route::get('/usuarios/show', [UsuarioController::class, 'index']);
// Ruta para mostrar la vista 'create.blade.php' de usuarios
Route::get('/usuarios/create', [UsuarioController::class, 'create']);
// Ruta para mostrar la vista 'update.blade.php' de usuarios
Route::get('/usuarios/edit/{codigo}', [UsuarioController::class, 'edit']);
// Ruta para almacenar un nuevo usuario en la base de datos
Route::post('/usuarios/store', [UsuarioController::class, 'store']);
// Ruta para actualizar un usuario existente en la base de datos
Route::post('/usuarios/update/{codigo}', [UsuarioController::class, 'update']);
// Ruta para eliminar un usuario de la base de datos
Route::delete('/usuarios/destroy/{codigo}', [UsuarioController::class, 'destroy']);


// Rutas para el CRUD de visitas
Route::get('/visitas/show', [VisitaController::class, 'index']);
Route::get('/visitas/create', [VisitaController::class, 'create']);
Route::post('/visitas/store', [VisitaController::class, 'store']);
Route::get('/visitas/edit/{visita}', [VisitaController::class, 'edit']);
Route::put('/visitas/update/{visita}', [VisitaController::class, 'update']);
Route::delete('/visitas/destroy/{codigo}', [VisitaController::class, 'destroy']);


Route::get('/tramites/show', [TramiteController::class, 'index']);
Route::get('/tramites/create', [TramiteController::class, 'create']);
Route::post('/tramites/store', [TramiteController::class, 'store']);
Route::get('/tramites/edit/{tramite}', [TramiteController::class, 'edit']);
Route::put('/tramites/update/{tramite}', [TramiteController::class, 'update']);
Route::delete('/tramites/destroy/{codigo}', [TramiteController::class, 'destroy']);


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function () {     
})->middleware('auth');  
return view('home');