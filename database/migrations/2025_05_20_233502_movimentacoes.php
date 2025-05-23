<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movimentacoes', function (Blueprint $table): void {
            $table->id();
            $table->integer('tipo');//0 - Entrada | 1 - Saída
            $table->foreignIdFor(\App\Models\Produto::class, 'id_produto');
            $table->integer('quantidade'); //Input pelo usuário na entrada de compras ou pedido de vendas
            $table->timestamps();
            $table->increment('id_pedido')->nullable(); //ID do pedido de venda ou compra

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimentacoes');
    }
};
