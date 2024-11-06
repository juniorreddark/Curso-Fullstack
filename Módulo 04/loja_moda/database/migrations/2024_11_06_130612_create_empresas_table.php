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
            $table->unsignedInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
            $table->unsignedInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->unsignedInteger('pedido_id');
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
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
