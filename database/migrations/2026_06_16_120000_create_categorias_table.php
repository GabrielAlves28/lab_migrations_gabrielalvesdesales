<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /** Cria a tabela categorias. Deve ser executada ANTES de adicionar FK em produtos. */
    public function up(): void
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
