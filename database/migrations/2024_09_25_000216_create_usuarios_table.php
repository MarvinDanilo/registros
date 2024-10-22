<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('codigo'); // Campo ID principal de la tabla
            $table->string('Nombre', 100); // Campo Nombre
            $table->string('contrasena', 100); // Campo Contraseña (en minúsculas para evitar errores)
            $table->string('rol', 100); // Campo Rol (en minúsculas)
            $table->date('fecha_registro'); // Campo de fecha de registro
            $table->timestamps(); // Campos created_at y updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
