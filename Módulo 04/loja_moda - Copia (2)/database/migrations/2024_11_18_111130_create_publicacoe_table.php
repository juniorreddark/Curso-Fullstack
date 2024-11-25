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
        Schema::create('publicacoe', function (Blueprint $table) {
                $table->id();// chave primária
                $table->foreignId('user_id')->constrained()->onDelete('cascade'); // chave estrangeira para users
                $table->foreignId('empresa_id')->constrained()->onDelete('cascade'); // chave estrangeira para empresas
                $table->foreignId('produto_id')->constrained()->onDelete('cascade'); // chave estrangeira para empresas
                $table->string('titulo');
                $table->text('conteudo');
                $table->timestamps();   // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicacoe');
    }
};
