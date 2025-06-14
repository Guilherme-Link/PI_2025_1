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
    public function createVenda()
    {
        $produtos = Produto::all();
        return view('cadastroVenda', compact('produtos'));
    }

    public function createCompra()
    {
        $produtos = Produto::all();
        return view('cadastroCompra', compact('produtos'));
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
            $produto = Produto::where('id', $item['id'])->get();

            $ItCreated = new Item_transacao();
            $ItCreated->id_produto = $item['id'];
            $ItCreated->id_transacao = $MovCreated->id;
            $ItCreated->quantidade = $item['quantidade'];
            $ItCreated->desconto = $item['desconto'];
            if ($mov['tipo_transacao'] == 0){
                //Em caso de venda, é gravado o valor unitário de venda
                $ItCreated->valor_unitario = $produto[0]->preco;

                //Atualização do estoque
                $produto[0]->quantidade -= $item['quantidade'];
            }
            else {
                //Em caso de compra, é gravado o custo unitário
                $ItCreated->valor_unitario = $produto[0]->custo;

                //Atualização do estoque
                $produto[0]->quantidade += $item['quantidade'];
            }

            $produto[0]->save();
            $ItCreated->save();

        }

        // Retorna a lista de transações
        $transacoes = Transacoes::all();
        return view('listaTransacoes', compact('transacoes'));
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
        try {
            $transacao->items_transacao()->delete();
            $transacao->delete();
            return redirect()->route('transacao.index')->with('success', 'Transação excluída com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('fornecedor.index')->with('error', $e->getMessage());
        }
    }
}