<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Atualiza o relacionamento categorias-produtos adicionando onDelete(cascade).
     * Use CASCADE quando: filhos nao fazem sentido sem o pai.
     * NAO use CASCADE quando: filhos devem ser preservados ou prefere erro de integridade.
     */
    public function up(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
        });
        Schema::table('produtos', function (Blueprint $table) {
            $table->foreign('categoria_id')
                  ->references('id')
                  ->on('categorias')
                  ->onDelete('cascade');
        });
    }
    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
        });
        Schema::table('produtos', function (Blueprint $table) {
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }
};
