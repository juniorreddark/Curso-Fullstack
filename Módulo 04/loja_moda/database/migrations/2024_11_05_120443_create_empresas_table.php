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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('cnpj');
            $table->string('razao_social');
            $table->string('endereco');
            $table->string('telefone');
            $table->string('numero');
            $table->string('rede_social');
            
           
            $table->unsignedBigInteger('produto_id')->nullable();
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
