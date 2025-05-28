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
        Schema::create('produto', function (Blueprint $table): void {
            $table->id();
            $table->string('nome');
            $table->foreignIdFor(\App\Models\Fornecedor::class, 'id_fornecedor')->constrained();
            $table->string('modelo');
            $table->string('marca');
            $table->string('tipo');
            $table->decimal('custo', total: 8, places: 2);
            $table->decimal('preco', total: 8, places: 2);
            $table->integer('quantidade');
            $table->string('observacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
