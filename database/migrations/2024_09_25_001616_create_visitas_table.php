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
        Schema::create('visitas', function (Blueprint $table) {
            $table->id('codigo'); // ID de la visita
            $table->bigInteger('id_visitante')->unsigned(); // Relación con visitantes
            $table->foreign('id_visitante')->references('codigo')->on('visitantes')->onDelete('cascade'); // Relación con el código en visitantes
            $table->bigInteger('id_usuario')->unsigned(); // Relación con usuarios
            $table->foreign('id_usuario')->references('codigo')->on('usuarios')->onDelete('cascade'); // Relación con el código en usuarios
            $table->string('proposito', 255);
            $table->date('fecha_visita'); // Columna para la fecha de la visita
            $table->time('hora_entrada', 6);
            $table->time('hora_salida', 6);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitas');
    }
};
