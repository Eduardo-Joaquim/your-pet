<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('animals', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->string('especie');
        $table->integer('idade');
        $table->string('raca')->nullable();
        $table->text('descricao')->nullable();
        $table->string('foto')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('animals');
}
};
