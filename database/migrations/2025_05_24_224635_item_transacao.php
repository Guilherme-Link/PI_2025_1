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
        Schema::create('item_transacao', function (Blueprint $table): void {
            $table->id();
            $table->foreignIdFor(App\Models\Produto::class, 'id_produto')->constrained();
            $table->foreignIdFor(App\Models\Transacoes::class, 'id_transacao')->constrained();
            $table->integer('quantidade');
            $table->decimal('desconto', total: 8, places: 2)->nullable();
            $table->decimal('valor_unitario', total: 8, places: 2);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_transacao');
    }
};
