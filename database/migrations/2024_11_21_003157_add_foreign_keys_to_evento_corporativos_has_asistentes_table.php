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
        Schema::table('evento_corporativos_has_asistentes', function (Blueprint $table) {
            $table->foreign(['asistente_id'], 'fk_evento_corporativos_has_asistentes_asistentes1')->references(['id'])->on('asistentes')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['evento_id'], 'fk_evento_corporativos_has_asistentes_evento_corporativos1')->references(['id'])->on('evento_corporativos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evento_corporativos_has_asistentes', function (Blueprint $table) {
            $table->dropForeign('fk_evento_corporativos_has_asistentes_asistentes1');
            $table->dropForeign('fk_evento_corporativos_has_asistentes_evento_corporativos1');
        });
    }
};
