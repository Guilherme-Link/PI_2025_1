<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\MovimentacoesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/listarProduto', [ProductsController::class, 'index'])->name('product.index');
Route::get('/cadastroProduto', [ProductsController::class, 'create'])->name('product.create');
Route::post('/adicionarProduto', [ProductsController::class, 'store'])->name('product.store');
Route::get('/editarProduto/{produto}', [ProductsController::class, 'edit'])->name('product.edit');
Route::put('/atualizarProduto/{produto}', [ProductsController::class, 'update'])->name('product.update');
Route::delete('/deletarProduto/{produto}', [ProductsController::class, 'destroy'])->name('product.destroy');

Route::get('/cadastroFornecedor', [FornecedorController::class, 'create'])->name('fornecedor.create');
Route::post('/adicionarFornecedor', [FornecedorController::class, 'store'])->name('fornecedor.store');
Route::get('/listarFornecedor', [FornecedorController::class, 'index'])->name('fornecedor.index');
Route::get('/editarFornecedor/{fornec}', [FornecedorController::class, 'edit'])->name('fornecedor.edit');
Route::post('/atualizarFornecedor/{fornec}', [FornecedorController::class, 'update'])->name('fornecedor.update');
Route::delete('/deletarFornecedor/{fornec}', [FornecedorController::class, 'destroy'])->name('fornecedor.destroy');

Route::get('/cadastroVenda', [MovimentacoesController::class, 'create'])->name('movimentacao.create');
Route::post('/adicionarVenda', [MovimentacoesController::class, 'store'])->name('movimentacao.store');


Route::get('/modalTeste', function () {
    return view('modalTeste');
});
Route::get('/modalTeste', function () {
    return view('modalTeste');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
