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
        Schema::create('animais', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('especie'); // cachorro, gato etc.
            $table->integer('idade');
            $table->string('raca')->nullable();
            $table->text('descricao')->nullable();
            $table->string('foto')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animais');
    }
};
