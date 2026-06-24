<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Adiciona coluna descricao (nullable) em produtos.
     * Nova migration criada para manter historico - arquivo original NAO editado.
     */
    public function up(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->text('descricao')->nullable()->after('nome');
        });
    }
    /** Reverte removendo a coluna descricao para permitir rollback correto. */
    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn('descricao');
        });
    }
};
