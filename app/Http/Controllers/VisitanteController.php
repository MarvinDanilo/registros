<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitante; // Asegúrate de incluir el modelo Visitante

class VisitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Listar todos visitantes 
        $visitantes = Visitante::select( 
            "visitantes.codigo", 
            "visitantes.nombre", 
            "visitantes.telefono", 
            "visitantes.correo_electronico", 
            "visitantes.fecha_nacimiento", 
            "visitantes.fecha_registro"
        ) 
        ->get(); 

        // Mostrar vista show.blade.php junto al listado de productos 
        return view('visitantes.show')->with(['visitantes' => $visitantes]); 
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Mostrar vista create.blade.php
        return view('visitantes.create'); 
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validar campos
    $data = request()->validate([ 
        'nombre' => 'required', 
        
        'telefono' => 'required|numeric',
        'correo_electronico' => 'required|email',
        'fecha_nacimiento' => 'required|date',
        'fecha_registro' => 'required|date'
    ]);

    // Enviar insert 
    Visitante::create($data); 

    // Redireccionar 
    return redirect('/visitantes/show')->with('success', 'Visitante creado exitosamente.'); 
}


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) 
    { 
        //
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param Visitante $visitante
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitante $visitante) 
    { 
        // Mostrar vista update.blade.php junto al visitante
        return view('visitantes.update')->with(['visitante' => $visitante]); 
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Visitante $visitante
     * @return \Illuminate\Http\Response
     */ 
    public function update(Request $request, Visitante $visitante) 
    { 
        // Validar campos
        $data = request()->validate([ 
            'nombre' => 'required', 
            'telefono' => 'required',
            'correo_electronico' => 'required',
            'fecha_nacimiento' => 'required',
            'fecha_registro' => 'required'
        ]); 

        // Reemplazar datos anteriores por los nuevos
        $visitante->update($data); 

        // Redireccionar 
        return redirect('/visitantes/show'); 
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */ 
    public function destroy(string $codigo)
    {
        Equipo::destroy($codigo);

        return response()->json(['res' => true]);
    }
public function __construct() 
{  
$this->middleware('auth'); 
}

}

