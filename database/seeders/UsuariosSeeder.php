<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definimos el arreglo de datos a insertar
        $data = array([ 
            'id_usuario'=>'01', 
            'contrasena'=>'admin', 
            'rol'=>'administrador',
            'fecha_registro'=>'2023-1-1',
            'created_at'=> Carbon::now() 
        ],[ 
            'id_usuario'=>'02', 
            'contrasena'=>'recepcion', 
            'rol'=>'recepcionista',
            'fecha_registro'=>'2023-2-1',
            'created_at'=> Carbon::now() 
        ],[ 
            'id_usuario'=>'03', 
            'contrasena'=>'supervi', 
            'rol'=>'supervisor',
            'fecha_registro'=>'2023-3-1',
            'created_at'=> Carbon::now() 
        ],[ 
            'id_usuario'=>'04', 
            'contrasena'=>'cliente', 
            'rol'=>'cliente',
            'fecha_registro'=>'2023-4-1',
            'created_at'=> Carbon::now() 
        ],[ 
            'id_usuario'=>'05', 
            'contrasena'=>'usuario', 
            'rol'=>'usuario registrado',
            'fecha_registro'=>'2023-5-1',
            'created_at'=> Carbon::now() 
        ],); 
        // Insertamos la data en la tabla productos
        DB::table('usuarios')->insert($data); 
    }
}
