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
        Schema::create('arquivos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('arquivo');
            $table->string('tituloArq');
            $table->char('tipoArq', length: 1);
            $table->unsignedBigInteger('aula_id');
            $table->foreign('aula_id')->references('id')->on('aulas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arquivos');
    }
};
