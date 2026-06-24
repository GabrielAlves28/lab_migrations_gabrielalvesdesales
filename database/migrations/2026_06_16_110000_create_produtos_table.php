<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Cria a tabela de produtos com tipos variados de dados.
     * Usa decimal(8,2) para preco pois garante precisao exata em
     * operacoes financeiras, evitando erros de arredondamento do float.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->decimal('preco', 8, 2);
            $table->integer('quantidade');
            $table->boolean('ativo')->default(true);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
