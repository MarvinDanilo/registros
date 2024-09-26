<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // Llamamos las clases Seeder que deseamos ejecutar
       $this->call([ 
           InformesSeeder::class,
           UsuariosSeeder::class,
           VisitantesSeeder::class,
           VisitasSeeder::class,
           TramitesSeeder::class

       ]);
    }
}
