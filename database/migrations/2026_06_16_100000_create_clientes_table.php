<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /** Cria a tabela de clientes com id, nome, email e timestamps. */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->timestamps();
        });
    }
    /** Reverte a migration removendo a tabela clientes. */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
