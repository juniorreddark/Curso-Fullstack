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
        Schema::table('Produto', function (Blueprint $table) {
            $table->string('foto')->nullable();  // Exemplo de coluna que será adicionada
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Produto', function (Blueprint $table) {
            $table->dropColumn('foto');  // Reverte a mudança no caso de rollback
        });
    }
};
