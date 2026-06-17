<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Cria tabela tarefas.
     * projeto_id: cascade (tarefa nao existe sem projeto)
     * colaborador_id: restrict (nao exclui colaborador com tarefas atribuidas)
     */
    public function up(): void
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao')->nullable();
            $table->string('status')->default('pendente');
            $table->foreignId('projeto_id')
                  ->constrained('projetos')
                  ->onDelete('cascade');
            $table->foreignId('colaborador_id')
                  ->constrained('colaboradores')
                  ->onDelete('restrict');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
