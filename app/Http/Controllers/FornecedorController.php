<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
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
        return view('cadastroFornecedor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $fornecCreated = new Fornecedor();
        $fornecCreated->nome = $request->nome;
        $fornecCreated->cnpj = $request->cnpj;
        $fornecCreated->razao_social = "Teste";
        $fornecCreated->insc_estadual = "Teste";
        $fornecCreated->cep = "Teste";
        $fornecCreated->cidade = "Teste";
        $fornecCreated->estado = "Teste";
        $fornecCreated->cidade = "Teste";
        $fornecCreated->rua = "Teste";
        $fornecCreated->numero = "Teste";
        $fornecCreated->bairro = "Teste";
        $fornecCreated->complemento = "Teste";
        $fornecCreated->save();
        return redirect()->route('fornecedor.create');
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
