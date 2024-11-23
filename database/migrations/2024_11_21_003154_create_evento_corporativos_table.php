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
        Schema::create('evento_corporativos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->date('fecha');
            $table->unsignedInteger('tipo_id')->index('fk_evento_corporativos_evento_corporativo_tipos1_idx');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable()->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_corporativos');
    }
};
