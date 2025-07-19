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
        Schema::create('usergreen', function (Blueprint $table) {
            $table->id('id_user'); // Clave primaria auto incremental
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('email', 200)->unique();
            $table->string('phone_number', 15);
            $table->timestamp('user_creation_date')->useCurrent(); // Fecha por defecto actual
            $table->tinyInteger('user_status')->default(1); // 1: activo, 0: inactivo
            $table->unsignedBigInteger('id_role'); // Llave foránea hacia ROLE
            $table->string('address', 200);

            // Restricción de llave foránea
            $table->foreign('id_role')->references('id_role')->on('role');
        });

        // Agrega el CHECK manualmente (para bases de datos como MySQL que no lo aplican automáticamente)
        DB::statement("ALTER TABLE usergreen ADD CONSTRAINT chk_user_status CHECK (user_status IN (1, 0))");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usergreen');
    }
};
