<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('actividades_profesor_grupo', function (Blueprint $table) {
           
            $table->unsignedBigInteger('grupo_id');
            $table->foreign('grupo_id')->references('id')->on('grupo');
            $table->unsignedBigInteger('actividad_id');
            $table->foreign('actividad_id')->references('id')->on('actividades');
            $table->unsignedBigInteger('profesor_id');
            $table->foreign('profesor_id')->references('id')->on('profesor');
         
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades_profesor_grupo');
    }
};
