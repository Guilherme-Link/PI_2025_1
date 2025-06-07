<?php

namespace App\Http\Controllers;

use App\Models\Item_transacao;
use App\Models\Transacoes;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transacoes = Transacoes::all();
        return view('listaTransacoes', compact('transacoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produtos = Produto::all();
        return view('cadastroVenda', compact('produtos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mov = $request->all();

        //Criando a nova transação
        $MovCreated = new Transacoes();
        $MovCreated->tipo = $mov['tipo_transacao'];
        $MovCreated->valor_total = $mov['valor_total'];
        $MovCreated->forma_pagamento = $mov['pagamento'];
        $MovCreated->save();

        //Criando os itens contidos na transação
        foreach($mov['items'] as $item){
            $ItCreated = new Item_transacao();
            $ItCreated->id_produto = $item['id'];
            $ItCreated->id_transacao = $MovCreated->id;
            $ItCreated->quantidade = $item['quantidade'];
            $ItCreated->desconto = $item['desconto'];
            $ItCreated->valor_unitario = 00;
            $ItCreated->save();
        }

        // Busca os produtos novamente para retornar à view
        $produtos = Produto::all();
        return view('cadastroVenda', compact('produtos'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transacoes $transacao)
    {
        $transacao->items_transacao()->delete();
        $transacao->delete();
        return redirect()->route('transacao.index');
    }
}
