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
        Schema::create('visitantes', function (Blueprint $table) {
            $table->id('codigo');
            $table->integer('id_visitante');
            $table->string('nombre', 100);
            $table->bigInteger('documento_id');
            $table->string('telefono', 25);
            $table->string('correo_electronico', 50);
            $table->date('fecha_nacimiento', 50);
            $table->date('fecha_registro', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitantes');
    }
};