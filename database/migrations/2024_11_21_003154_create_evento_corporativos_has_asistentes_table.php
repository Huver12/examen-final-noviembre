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
        Schema::create('evento_corporativos_has_asistentes', function (Blueprint $table) {
            $table->integer('evento_id')->index('fk_evento_corporativos_has_asistentes_evento_corporativos1_idx');
            $table->integer('asistente_id')->index('fk_evento_corporativos_has_asistentes_asistentes1_idx');

            $table->primary(['evento_id', 'asistente_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_corporativos_has_asistentes');
    }
};
