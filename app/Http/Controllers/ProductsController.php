<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Fornecedor;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Produto $produto)
    {
        $produto = Produto::all();
        return view('listaProduto', compact('produto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $fornecedores = Fornecedor::all();  
      return view('cadastroProduto', compact('fornecedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = $request->all();
        $product['quantidade'] = 0;
        $productCreated = Produto::create($product);
        return redirect('/listarProduto');
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
    public function edit(Produto $produto)
    {
        $fornecedores = Fornecedor::all();
        return view('editarProduto', compact('produto', 'fornecedores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $newProduto = $request->all();

        $produto->nome = $newProduto['nome'];
        $produto->id_fornecedor = $newProduto['id_fornecedor'];
        $produto->modelo = $newProduto['modelo'];
        $produto->marca = $newProduto['marca'];
        $produto->tipo = $newProduto['tipo'];
        $produto->custo = $newProduto['custo'];
        $produto->preco = $newProduto['preco'];
        $produto->observacao = $newProduto['observacao'];

        $produto->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('product.index');
    }
}
