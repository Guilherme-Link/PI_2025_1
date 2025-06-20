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
        try {
            $product = $request->all();
            $product['quantidade'] = 0;
            $productCreated = Produto::create($product);
            return redirect('/listarProduto')->with('success', 'Produto cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('product.index')->with('error', 'Erro ao cadastrar o produto.');
        }
        
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
        try {
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
            return redirect()->route('product.index')->with('success', 'Produto atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('fornecedor.index')->with('error', 'Erro ao atualizar o produto.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        try {
            $produto->delete();
            return redirect()->route('product.index')->with('success', 'Produto excluído com sucesso!');
        } catch (\Exception $e) {
            //Verifica se o erro é de integridade referencial (chave estrangeira)
            if ($e->getCode() == 23000) {
                return redirect()->route('product.index')->with('error', 'Não foi possível excluir o produto porque existem registros vinculados a ele em outras tabelas.');
            }
        }
        $produto->delete();
        return redirect()->route('product.index');
    }
}
