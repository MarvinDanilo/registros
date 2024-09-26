<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;

class TramitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definimos el arreglo de datos a insertar
        $data = array([ 
            'id_tramite'=>'01', 
            'id_visitante'=>'01', 
            'id_visita'=>'01',
            'descripcion'=>'tramite para solicitar credito',
            'estado'=>'activo',
            'fecha_inicio'=>'2023-1-1',
            'fecha_fin'=>'2023-1-3',
            'id_usuario'=>'01',
            'created_at'=> Carbon::now() 
       ],[ 
            'id_tramite'=>'02', 
            'id_visitante'=>'02', 
            'id_visita'=>'02',
            'descripcion'=>'tramite para solicitar visa',
            'estado'=>'activo',
            'fecha_inicio'=>'2023-2-1',
            'fecha_fin'=>'2023-2-3',
            'id_usuario'=>'02',
            'created_at'=> Carbon::now() 

        ],[ 
            'id_tramite'=>'03', 
            'id_visitante'=>'03', 
            'id_visita'=>'03',
            'descripcion'=>'tramite para solicitar plaza de trabajo',
            'estado'=>'activo',
            'fecha_inicio'=>'2023-3-1',
            'fecha_fin'=>'2023-3-3',
            'id_usuario'=>'03',
            'created_at'=> Carbon::now() 

        ],[ 
            'id_tramite'=>'04', 
            'id_visitante'=>'04', 
            'id_visita'=>'04',
            'descripcion'=>'tramite para solicitar tarjeta de credito',
            'estado'=>'activo',
            'fecha_inicio'=>'2023-4-1',
            'fecha_fin'=>'2023-4-3',
            'id_usuario'=>'04',
            'created_at'=> Carbon::now() 

        ],[ 
            'id_tramite'=>'05', 
            'id_visitante'=>'05', 
            'id_visita'=>'05',
            'descripcion'=>'tramite para solicitar antecedentes penales',
            'estado'=>'activo',
            'fecha_inicio'=>'2023-5-1',
            'fecha_fin'=>'2023-5-3',
            'id_usuario'=>'05',
            'created_at'=> Carbon::now() 


        ]); 
        // Insertamos la data en la tabla productos
        DB::table('tramites')->insert($data); 
    }
}
