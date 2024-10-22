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
    Schema::create('tramites', function (Blueprint $table) {
        $table->id('codigo'); // ID del trámite
        $table->bigInteger('id_visitante')->unsigned(); // Relación con la tabla visitantes
        $table->foreign('id_visitante')->references('codigo')->on('visitantes')->onDelete('cascade'); // Relación con la tabla visitantes
        $table->bigInteger('id_visita')->unsigned(); // Relación con la tabla visitas
        $table->foreign('id_visita')->references('codigo')->on('visitas')->onDelete('cascade'); // Relación con la tabla visitas
        $table->bigInteger('id_usuario')->unsigned(); // Relación con la tabla usuarios
        $table->foreign('id_usuario')->references('codigo')->on('usuarios')->onDelete('cascade'); // Relación con la tabla usuarios
        $table->text('descripcion', 255);
        $table->string('estado', 25);
        $table->date('fecha_inicio');
        $table->date('fecha_fin');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tramites');
    }
};
