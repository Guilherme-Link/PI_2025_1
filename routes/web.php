<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastroProduto', [ProductsController::class, 'create'])->name('product.create');
Route::post('/adicionarProduto', [ProductsController::class, 'store'])->name('product.store');

Route::get('/cadastroVenda', function () {
    return view('cadastroVenda');
});

Route::get('/cadastroFornecedor', [FornecedorController::class, 'create'])->name('fornecedor.create');
Route::post('/adicionarFornecedor', [FornecedorController::class, 'store'])->name('fornecedor.store');


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
