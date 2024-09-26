<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;

class VisitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
         // Definimos el arreglo de datos a insertar
         $data = array([ 
            
            'id_visita'=>'01', 
            'id_visitante'=>'01',
            'proposito'=>'solicitud de tramite',
            'hora_entrada'=>'11:00:00',
            'hora_salida'=>'11:30:00',
            'id_usuario'=>'01',
            'created_at'=> Carbon::now() 
        ],[ 
            
            'id_visita'=>'02', 
            'id_visitante'=>'02',
            'proposito'=>'solicitud de tramite',
            'hora_entrada'=>'10:00:00',
            'hora_salida'=>'10:30:00',
            'id_usuario'=>'02',
            'created_at'=> Carbon::now() 
        ],[ 
            
            'id_visita'=>'03', 
            'id_visitante'=>'03',
            'proposito'=>'solicitud de tramite',
            'hora_entrada'=>'9:00:00',
            'hora_salida'=>'9:30:00',
            'id_usuario'=>'03',
            'created_at'=> Carbon::now() 
        ],[ 
            
            'id_visita'=>'04', 
            'id_visitante'=>'04',
            'proposito'=>'solicitud de tramite',
            'hora_entrada'=>'8:00:00',
            'hora_salida'=>'8:30:00',
            'id_usuario'=>'04',
            'created_at'=> Carbon::now() 
        ],[ 
            
            'id_visita'=>'05', 
            'id_visitante'=>'05',
            'proposito'=>'solicitud de tramite',
            'hora_entrada'=>'1:00:00',
            'hora_salida'=>'1:30:00',
            'id_usuario'=>'05',
            'created_at'=> Carbon::now() 
        ]); 
        // Insertamos la data en la tabla productos
        DB::table('visitas')->insert($data); 
    }
}
