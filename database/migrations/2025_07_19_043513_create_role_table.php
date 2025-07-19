<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('role', function (Blueprint $table) {
            $table->id('id_role'); // Campo ID con nombre personalizado
            $table->string('role_name', 20)->unique(); // Campo de nombre con longitud máxima
            $table->timestamp('role_creation_date')->useCurrent(); // Fecha de creación con valor por defecto
        });

        // Agrega la restricción CHECK después de crear la tabla (MySQL no soporta CHECK directamente desde Blueprint)
        DB::statement("ALTER TABLE role ADD CONSTRAINT chk_role_name CHECK (role_name IN ('ADMIN', 'CLIENT'))");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role');
    }
};
