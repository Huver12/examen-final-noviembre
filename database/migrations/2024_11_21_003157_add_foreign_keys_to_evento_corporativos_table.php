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
        Schema::table('evento_corporativos', function (Blueprint $table) {
            $table->foreign(['tipo_id'], 'fk_evento_corporativos_evento_corporativo_tipos1')->references(['id'])->on('evento_corporativo_tipos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evento_corporativos', function (Blueprint $table) {
            $table->dropForeign('fk_evento_corporativos_evento_corporativo_tipos1');
        });
    }
};
