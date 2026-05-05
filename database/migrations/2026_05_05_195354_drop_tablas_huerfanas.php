<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('infotestigo');
        Schema::dropIfExists('mesas');
        Schema::dropIfExists('testigo');
        Schema::dropIfExists('infoelectoral');
        Schema::dropIfExists('personas');
        Schema::dropIfExists('puesto');
        Schema::enableForeignKeyConstraints();
    }

    public function down(): void
    {
        //
    }
};
