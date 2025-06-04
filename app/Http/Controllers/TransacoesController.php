<?php

namespace App\Http\Controllers;

use App\Models\Item_transacao;
use App\Models\Transacoes;
use Illuminate\Http\Request;

class TransacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cadastroVenda');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mov = $request->all();

        //Criando a nova transação
        $MovCreated = new Transacoes();
        $MovCreated->tipo = 0;
        $MovCreated->valor_total = $mov['preco_total'];
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

        return view('cadastroVenda');
        //dd($mov);
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
    public function destroy(string $id)
    {
        //
    }
}
