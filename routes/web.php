<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cadastroProduto', function () {
    return view('cadastroProduto');
});

Route::get('/cadastroVenda', function () {
    return view('cadastroVenda');
});
Route::get('/cadastroFornecedor', function () {
    return view('cadastroFornecedor');
});



