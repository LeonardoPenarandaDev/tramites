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
        Schema::create('estratificaciones', function (Blueprint $table) {
            $table->id();
            $table->string('ficha_catastral')->unique()->index();
            $table->string('ficha_nacional')->nullable();
            $table->string('matricula_inmobiliaria')->nullable();
            $table->string('propietario')->nullable();
            $table->string('identificacion')->nullable()->index();
            $table->string('direccion_predio');
            $table->decimal('hectareas', 15, 4)->nullable();
            $table->decimal('area_construida', 15, 2)->nullable();
            $table->string('destino_economico')->nullable();
            $table->string('estrato');
            $table->decimal('avaluo', 20, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estratificaciones');
    }
};
