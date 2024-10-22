<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tramite;
use App\Models\Visitante;
use App\Models\Visita;
use App\Models\Usuario; // Modelo del usuario

class TramiteController extends Controller
{
    public function index()
    {
        // Obtener todos los trámites y relaciones necesarias
        $tramites = Tramite::with(['visitante', 'visita', 'usuario'])->get();
        return view('tramites.show', compact('tramites'));
    }

    public function create()
{
    // Obtener datos de visitantes, visitas y usuarios
    $visitantes = Visitante::all();
    $visitas = Visita::all();
    $usuarios = Usuario::all(); // Asegúrate de que este nombre sea correcto

    // Pasar las variables a la vista
    return view('tramites.create', compact('visitantes', 'visitas', 'usuarios'));
}


    public function store(Request $request)
    {
        // Validar los campos
        $data = $request->validate([
            'id_visitante' => 'required|exists:visitantes,codigo',
            'id_visita' => 'required|exists:visitas,codigo',
            'descripcion' => 'required|max:255',
            'estado' => 'required|in:Pendiente,Aprobado,Rechazado',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'id_usuario' => 'required|exists:usuarios,codigo',

        ]);

        // Crear el trámite
        Tramite::create($data);

        // Redireccionar a la vista de trámites con mensaje de éxito
        return redirect('/tramites/show')->with('success', 'Trámite creado exitosamente.');
    }

    public function edit(Tramite $tramite)
    {
        // Obtener los datos necesarios para los select de la vista
        $visitantes = Visitante::all();
        $visitas = Visita::all();
        $usuarios = Usuario::all();

        // Pasar el trámite y datos a la vista
        return view('tramites.update', compact('tramite', 'visitantes', 'visitas', 'usuarios'));
    }

    public function update(Request $request, Tramite $tramite)
    {
        // Validar los campos
        $data = $request->validate([
            'id_visitante' => 'required|exists:visitantes,codigo',
            'id_visita' => 'required|exists:visitas,codigo',
            'descripcion' => 'required|max:255',
            'estado' => 'required|in:Pendiente,Aprobado,Rechazado',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'id_usuario' => 'required|exists:usuarios,codigo',
        ]);

        // Actualizar el trámite
        $tramite->update($data);

        // Redireccionar a la vista de trámites con mensaje de éxito
        return redirect('/tramites/show')->with('success', 'Trámite actualizado exitosamente.');
    }

    public function destroy($id)
    {
        // Eliminar el trámite
        Tramite::destroy($id);
        return response()->json(['res' => true]);
    }
    public function __construct() 
{  
$this->middleware('auth'); 
}
}
