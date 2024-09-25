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
            $table->id('codigo');
            $table->integer('id_visita');
            $table->bigInteger('id_visitante')->unsigned();
            $table->foreign('id_visitante')->references('codigo')->on('visitantes');
            $table->string('proposito', 255);
            $table->time('hora_entrada', 6);
            $table->time('hora_salida', 6);
            $table->bigInteger('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('codigo')->on('usuarios');
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
