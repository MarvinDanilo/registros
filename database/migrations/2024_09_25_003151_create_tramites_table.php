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
            $table->id('codigo');
            $table->integer('id_tramite',);
            $table->bigInteger('id_visitante')->unsigned();
            $table->foreign('id_visitante')->references('codigo')->on('visitas');
            $table->bigInteger('id_visita')->unsigned();
            $table->foreign('id_visita')->references('codigo')->on('visitas');
            $table->text('descripcion', 255);
            $table->string('estado', 25);
            $table->date('fecha_inicio', 50);
            $table->date('fecha_fin', 50);
            $table->bigInteger('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('codigo')->on('visitas');
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
