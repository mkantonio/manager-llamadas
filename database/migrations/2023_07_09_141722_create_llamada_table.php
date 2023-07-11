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
        Schema::create('llamada', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('eess_id');
            $table->foreignId('telefono_id')->constrained('telefono');
            $table->foreign('eess_id')->references('id')->on('eess');
            $table->foreignId('operador_id')->constrained('operador');
            $table->foreignId('estado_id')->constrained('estado');
            $table->foreignId('categoria_id')->constrained('categoria');
            $table->text('descripcion');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('llamada');
    }
};
