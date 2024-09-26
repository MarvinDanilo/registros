<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;

class InformesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definimos el arreglo de datos a insertar
        $data = array([ 
            'id_informe'=>'1', 
            'tipo_informe'=>'financiero', 
            'fecha_informe'=>'2023-1-1', 
            'archivo_pdf'=>'finanzas',  
            'created_at'=>Carbon::now() 
    ],[ 
            'id_informe'=>'2', 
            'tipo_informe'=>'institucional', 
            'fecha_informe'=>'2023-2-1', 
            'archivo_pdf'=>'instituto',  
            'created_at'=>Carbon::now() 

    ], [ 
            'id_informe'=>'3', 
            'tipo_informe'=>'administracion', 
            'fecha_informe'=>'2023-3-1', 
            'archivo_pdf'=>'administrativo',  
            'created_at'=>Carbon::now() 
    ], [ 
            'id_informe'=>'4', 
            'tipo_informe'=>'pago', 
            'fecha_informe'=>'2023-4-1', 
            'archivo_pdf'=>'cuota',  
            'created_at'=>Carbon::now() 

    ] ,[ 
            'id_informe'=>'5', 
            'tipo_informe'=>'inspeccion', 
            'fecha_informe'=>'2023-5-1', 
            'archivo_pdf'=>'inspecciones',  
            'created_at'=>Carbon::now() 

    ]); 
       // Insertamos la data en la tabla marcas
       DB::table('informes')->insert($data); 
    }
}
