<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; // Modelo de Usuario

class UsuarioController extends Controller
{
    /**
     * Mostrar una lista de recursos.
     */
    public function index()
    {
        // Obtener todos los usuarios de la base de datos
        $usuarios = Usuario::all();

        // Mostrar la vista 'usuarios.show' junto con el listado de usuarios
        return view('usuarios.show')->with(['usuarios' => $usuarios]);
    }

    /**
     * Mostrar el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        // Mostrar la vista 'usuarios.create'
        return view('usuarios.create');
    }

    /**
     * Almacenar un recurso recién creado en la base de datos.
     */
    public function store(Request $request)
{
    // Validar los datos enviados desde el formulario
    $data = $request->validate([
        'Nombre' => 'required|string|max:100',
        'contrasena' => 'required|string|min:6', // Asegúrate de que esto esté aquí
        'rol' => 'required|string',
        'fecha_registro' => 'required|date',
    ]);

    // Encriptar la contraseña
    $data['contrasena'] = bcrypt($data['contrasena']);

    // Crear el nuevo usuario en la base de datos
    Usuario::create($data);

    // Redireccionar a la vista de listado de usuarios con mensaje de éxito
    return redirect('/usuarios/show')->with('success', 'Usuario creado exitosamente.');
}




    /**
     * Mostrar el formulario para editar un recurso existente.
     */
    public function edit(Usuario $usuario)
{
    
    $usuario = Usuario::findOrFail($codigo); // Asegúrate de usar el campo correcto
    return view('usuarios.edit', compact('usuario'));
    

}



    /**
     * Actualizar un recurso en la base de datos.
     */
    public function update(Request $request, Usuario $usuario)
    {
        // Validar los datos enviados desde el formulario
        $data = $request->validate([
            'Nombre' => 'required|string|max:100',
            'contrasena' => 'nullable|string|min:6',
            'rol' => 'required|string',
            'fecha_registro' => 'required|date',
        ]);

        // Si se envía una nueva contraseña, encriptarla y actualizarla
        if ($request->filled('contrasena')) {
            $data['contrasena'] = bcrypt($data['contrasena']);
        } else {
            // Si no, eliminar la clave 'Contrasena' para no modificarla
            unset($data['contrasena']);
        }

        // Actualizar los datos del usuario
        $usuario->update($data);

        // Redireccionar a la vista de listado de usuarios con mensaje de éxito
        return redirect('/usuarios/show')->with('success', 'Usuario actualizado exitosamente.');
    }

    /**
     * Eliminar un recurso de la base de datos.
     */
    public function destroy(string $id)
    {
        Equipo::destroy($id);

        return response()->json(['res' => true]);
    }
    public function __construct() 
{  
$this->middleware('auth'); 
}

}
