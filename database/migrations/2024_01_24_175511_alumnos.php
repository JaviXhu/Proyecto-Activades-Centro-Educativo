<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')->references('id')->on('grupo');
            $table->string('telefono');
            $table->string('correo');
            $table->string('apellido');
            $table->string('nombre');
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno');
    }
};
