<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Cria tabela livros - Sistema de Biblioteca.
     * FK autor_id com cascade: ao excluir autor, livros sao excluidos.
     */
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->integer('ano_publicacao');
            $table->foreignId('autor_id')
                  ->constrained('autores')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
