<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Cria tabela alunos com FK restrict para cursos.
     * NAO usa cascade: ao excluir curso, erro e lancado pois alunos existem.
     * Justificativa: aluno existe independentemente; exclusao deve ser bloqueada
     * para que o usuario trate manualmente a situacao.
     */
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->foreignId('curso_id')
                  ->constrained('cursos')
                  ->onDelete('restrict');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
