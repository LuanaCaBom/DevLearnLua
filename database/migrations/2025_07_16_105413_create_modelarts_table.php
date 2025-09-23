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
        Schema::create('modelarts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomeObra');
            $table->string('artistaObra');
            $table->string('tipoObra');
            $table->string('estiloObra');
            $table->string('imagemObra');
            $table->integer('dataObra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelarts');
    }
};
