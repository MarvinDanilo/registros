<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Carbon\Carbon;

class VisitantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Definimos el arreglo de datos a insertar
        $data = array([ 
            'id_visitante'=>'01', 
            'nombre'=>'Alexander Rodriguez', 
            'documento_id'=>'01',
            'telefono'=>'77668899',
            'correo_electronico'=>'alex@gmail.com',
            'fecha_nacimiento'=>'2002-1-1',
            'fecha_registro'=>'2023-1-1',
            'created_at'=> Carbon::now() 
        ],[ 
            'id_visitante'=>'02', 
            'nombre'=>'Edwin Zepeda', 
            'documento_id'=>'02',
            'telefono'=>'65443789',
            'correo_electronico'=>'edwin@gmail.com',
            'fecha_nacimiento'=>'2002-2-1',
            'fecha_registro'=>'2023-2-1',
            'created_at'=> Carbon::now() 
        ],[ 
            'id_visitante'=>'03', 
            'nombre'=>'Esau Rivas', 
            'documento_id'=>'03',
            'telefono'=>'76558940',
            'correo_electronico'=>'esau@gmail.com',
            'fecha_nacimiento'=>'2002-3-1',
            'fecha_registro'=>'2023-3-1',
            'created_at'=> Carbon::now() 
        ],[ 
            'id_visitante'=>'04', 
            'nombre'=>'Dani Hernandez', 
            'documento_id'=>'04',
            'telefono'=>'76554332',
            'correo_electronico'=>'dani@gmail.com',
            'fecha_nacimiento'=>'2002-4-1',
            'fecha_registro'=>'2023-4-1',
            'created_at'=> Carbon::now() 
        ],[ 
            'id_visitante'=>'05', 
            'nombre'=>'Katy Garcia', 
            'documento_id'=>'05',
            'telefono'=>'78765420',
            'correo_electronico'=>'katy@gmail.com',
            'fecha_nacimiento'=>'2002-5-1',
            'fecha_registro'=>'2023-5-1',
            'created_at'=> Carbon::now() 
        ]); 
        // Insertamos la data en la tabla productos
        DB::table('visitantes')->insert($data); 
    }
}
