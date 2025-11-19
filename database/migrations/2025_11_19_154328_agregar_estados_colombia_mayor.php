<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("ALTER TABLE `colombia_mayor_beneficiarios` MODIFY COLUMN `estado` ENUM('Activo', 'Inactivo', 'Suspendido', 'En Proceso', 'Potencial Beneficiario', 'Inscrito') DEFAULT 'Activo'");
    }

    public function down(): void
    {
        DB::statement("ALTER TABLE `colombia_mayor_beneficiarios` MODIFY COLUMN `estado` ENUM('Activo', 'Inactivo', 'Suspendido', 'En Proceso') DEFAULT 'Activo'");
    }
};