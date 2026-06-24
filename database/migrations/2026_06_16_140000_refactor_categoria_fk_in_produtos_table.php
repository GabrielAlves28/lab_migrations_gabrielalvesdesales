<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Refatora a FK categoria_id em produtos para a sintaxe moderna foreignId().
     * Vantagens do foreignId():
     * - Codigo mais conciso e legivel
     * - Convencao de nomenclatura automatica
     * - Menos chance de erros de digitacao
     */
    public function up(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
            $table->dropColumn('categoria_id');
        });
        Schema::table('produtos', function (Blueprint $table) {
            $table->foreignId('categoria_id')
                  ->nullable()
                  ->after('ativo')
                  ->constrained('categorias');
        });
    }
    public function down(): void
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign(['categoria_id']);
            $table->dropColumn('categoria_id');
        });
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('categoria_id')->nullable()->after('ativo');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }
};
