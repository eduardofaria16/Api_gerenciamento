<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @param $bp
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->float('valor');
            $table->unsignedBigInteger('id_marca');
            $table->foreign('id_marca')->references('id')->on('marcas');
            $table->float('estoque');
            $table->unsignedBigInteger('id_cidade');
            $table->foreign('id_cidade')->references('id')->on('cidades');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};