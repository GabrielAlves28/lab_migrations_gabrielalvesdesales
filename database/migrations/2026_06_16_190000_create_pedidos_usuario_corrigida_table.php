<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
 * MIGRATION COM ERROS - versao original quebrada (NAO EXECUTAR)
 * Erros identificados:
 * 1. class nomeada em vez de return new class (sintaxe incorreta no Laravel 10+)
 * 2. ->on('usuario') - tabela inexistente (deveria ser users)
 * 3. $table->interger() - typo (deveria ser integer/foreignId)
 * 4. $table->timestamps sem () - erro fatal (propriedade vs metodo)
 * 5. Schema::drop() sem IfExists - pode causar erro se tabela nao existir
 */

// class CreatePedidosUsuarioTable extends Migration   // ERRO 1
// {
//     public function up()
//     {
//         Schema::create('pedidos_usuario', function (Blueprint $table) {
//             $table->id();
//             $table->interger('usuario_id');                           // ERRO 3
//             $table->foreign('usuario_id')->references('id')->on('usuario'); // ERRO 2
//             $table->timestamps;                                        // ERRO 4
//         });
//     }
//     public function down()
//     {
//         Schema::drop('pedidos_usuario');                              // ERRO 5
//     }
// }

