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
        Schema::create('grupo_membro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grupo_id');
            $table->unsignedBigInteger('artista_id'); // Referenciando a tabela "artistas"
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('restrict');
            $table->foreign('artista_id')->references('id')->on('artistas')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo_membro');
    }
};
