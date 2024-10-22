<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visita;
use App\Models\Usuario; // Asegúrate de incluir el modelo Usuario
use App\Models\Visitante; 

class VisitaController extends Controller
{
    public function index()
    {
        // Listar todas las visitas
        $visitas = Visita::with(['visitante', 'usuario'])->get(); // Obtén todas las visitas con los datos de visitantes y usuarios
        return view('visitas.show', compact('visitas')); // Pasa la variable $visitas a la vista
    }

    public function create()
{
    $usuarios = Usuario::all(); // Obtener todos los usuarios para seleccionarlos
    $visitantes = Visitante::all(); // Obtener todos los visitantes para seleccionarlos
    
    return view('visitas.create', compact('usuarios', 'visitantes')); // Pasa la variable $visitantes a la vista
    
    
}

public function store(Request $request)
{
    // Validar campos
    $data = request()->validate([
        'codigo_visitante' => 'required',
        'id_usuario' => 'required', // Asegúrate de incluir este campo
        'proposito' => 'required',
        'fecha_visita' => 'required|date',
        'hora_entrada' => 'required|date_format:H:i',
        'hora_salida' => 'required|date_format:H:i',
    ]);

    // Asignar 'codigo_visitante' a 'id_visitante'
    $data['id_visitante'] = $data['codigo_visitante']; // Mapea el código del visitante al campo correcto

    // Crear visita
    Visita::create($data);

    // Redireccionar
    return redirect('/visitas/show')->with('success', 'Visita creada exitosamente.');
}

public function edit(Visita $visita)
{
    $usuarios = Usuario::all(); // Obtener todos los usuarios
    $visitantes = Visitante::all(); // Obtener todos los visitantes

    return view('visitas.update', compact('visita', 'usuarios', 'visitantes')); // Pasa las variables a la vista
}



    public function update(Request $request, Visita $visita)
    {
        // Validar campos
        $data = request()->validate([
            'codigo_visitante' => 'required',
            'id_usuario' => 'required', // Asegúrate de incluir este campo
            'proposito' => 'required',
            'fecha_visita' => 'required|date',
            'hora_entrada' => 'required|date_format:H:i',
            'hora_salida' => 'required|date_format:H:i',
        ]);

        // Actualizar visita
        $visita->update($data);

        // Redireccionar
        return redirect('/visitas/show')->with('success', 'Visita actualizada exitosamente.');
    }

    public function destroy($id)
    {
        // Eliminar visita
        Visita::destroy($id);
        return response()->json(['res' => true]);
    }
    public function __construct() 
{  
$this->middleware('auth'); 
}
}
