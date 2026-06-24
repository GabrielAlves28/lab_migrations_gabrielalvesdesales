<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// CORRECAO 1: return new class ao inves de class nomeada
// CORRECAO 2: on('users') - tabela correta do Laravel
// CORRECAO 3: foreignId() ao inves de interger() com typo
// CORRECAO 4: timestamps() com parenteses (metodo, nao propriedade)
// CORRECAO 5: Schema::dropIfExists() ao inves de Schema::drop()
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pedidos_usuario', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                  ->constrained('users')
                  ->onDelete('cascade');
            $table->decimal('total', 10, 2);
            $table->string('status')->default('pendente');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('pedidos_usuario');
    }
};
