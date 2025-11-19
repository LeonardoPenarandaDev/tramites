<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('colombia_mayor_beneficiarios', function (Blueprint $table) {
            $table->id();
            $table->string('numero_documento', 20)->unique();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->enum('estado', ['Activo', 'Inactivo', 'Suspendido', 'En Proceso', 'Potencial Beneficiario', 'Inscrito'])->default('Activo');
            $table->timestamps();
            
            // Índices para optimizar búsquedas
            $table->index('numero_documento');
            $table->index('estado');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('colombia_mayor_beneficiarios');
    }
};