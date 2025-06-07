<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\TransacoesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rotas de Produtos
Route::get('/listarProduto', [ProductsController::class, 'index'])->name('product.index');
Route::get('/cadastroProduto', [ProductsController::class, 'create'])->name('product.create');
Route::post('/adicionarProduto', [ProductsController::class, 'store'])->name('product.store');
Route::get('/editarProduto/{produto}', [ProductsController::class, 'edit'])->name('product.edit');
Route::put('/atualizarProduto/{produto}', [ProductsController::class, 'update'])->name('product.update');
Route::delete('/deletarProduto/{produto}', [ProductsController::class, 'destroy'])->name('product.destroy');

// Rotas de Fornecedores
Route::get('/cadastroFornecedor', [FornecedorController::class, 'create'])->name('fornecedor.create');
Route::post('/adicionarFornecedor', [FornecedorController::class, 'store'])->name('fornecedor.store');
Route::get('/listarFornecedor', [FornecedorController::class, 'index'])->name('fornecedor.index');
Route::get('/editarFornecedor/{fornec}', [FornecedorController::class, 'edit'])->name('fornecedor.edit');
Route::post('/atualizarFornecedor/{fornec}', [FornecedorController::class, 'update'])->name('fornecedor.update');
Route::delete('/deletarFornecedor/{fornec}', [FornecedorController::class, 'destroy'])->name('fornecedor.destroy');

// Rotas de Vendas
Route::get('/cadastroVenda', [TransacoesController::class, 'create'])->name('transacao.create');
Route::post('/cadastroVenda', [TransacoesController::class, 'store'])->name('transacao.store');
Route::get('/listaTransacoes', [TransacoesController::class, 'index'])->name('transacao.index');
Route::delete('/listaTransacoes/{transacao}', [TransacoesController::class, 'destroy'])->name('transacao.destroy');

// Rotas de Autenticação
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
