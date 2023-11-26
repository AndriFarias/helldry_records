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
        Schema::create('artistas', function (Blueprint $table) {
            $table->id();
            $table->string('nome',64);
            $table->date('dt_nascimento');
            $table->string('nacionalidade',255);
            $table->string('endereco',256);
            $table->string('email')->unique();
            $table->string('telefone',32);
            $table->enum('status',['0','1'])->default('1');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artistas');
    }
};
