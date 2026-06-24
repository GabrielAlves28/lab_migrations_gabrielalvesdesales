<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Adiciona FK categoria_id em produtos usando sintaxe MANUAL.
     * unsignedBigInteger + foreign() referenciam a tabela categorias.
     * IMPORTANTE: categorias deve existir antes desta migration.
     */
    public function up(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('categoria_id')->nullable()->after('ativo');
            $table->foreign('categoria_id')
                  ->references('id')
                  ->on('categorias');
        });
    }
    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
            $table->dropColumn('categoria_id');
        });
    }
};
