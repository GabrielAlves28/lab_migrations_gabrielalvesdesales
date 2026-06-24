<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Cria tabela pedidos.
     * Relacionamento 1:N - Um cliente pode ter varios pedidos.
     * clientes (1) <--- (N) pedidos [RESTRICT: nao exclui cliente com pedidos]
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')
                  ->constrained('clientes')
                  ->onDelete('restrict');
            $table->decimal('total', 10, 2);
            $table->string('status');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
