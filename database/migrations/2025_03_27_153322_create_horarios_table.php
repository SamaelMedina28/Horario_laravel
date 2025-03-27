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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_dia')->constrained('dias')->onDelete('cascade');
            $table->foreignId('id_materia')->constrained('materias')->onDelete('cascade');
            $table->foreignId('id_salon')->constrained('salones')->onDelete('cascade');
            $table->foreignId('id_entrada')->constrained('entradas')->onDelete('cascade');
            $table->foreignId('id_salida')->constrained('salidas')->onDelete('cascade');

            $table->timestamps();

            // Índices y restricciones
            $table->unique([
                'id_dia',
                'id_materia',
                'id_entrada',
                'id_salida'
            ], 'horario_unico');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
