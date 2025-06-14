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
        $fornec = Fornecedor::all();
        return view('listaFornecedor', compact('fornec'));
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
        try {
            $fornec = $request->all();
            Fornecedor::create($fornec);
            return redirect()->route('fornecedor.index')->with('success', 'Fornecedor cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('fornecedor.index')->with('error', 'Erro ao cadastrar o fornecedor.');
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
    public function edit(Fornecedor $fornec)
    {
        return view('editarFornecedor', compact('fornec'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fornecedor $fornec)
    {
        try {
            $newfornec = $request->all();

            $fornec->nome = $newfornec['nome'];
            $fornec->cnpj = $newfornec['cnpj'];
            $fornec->razao_social = $newfornec['razao_social'];
            $fornec->insc_estadual = $newfornec['insc_estadual'];
            $fornec->cep = $newfornec['cep'];
            $fornec->estado = $newfornec['estado'];
            $fornec->cidade = $newfornec['cidade'];
            $fornec->numero = $newfornec['numero'];
            $fornec->bairro = $newfornec['bairro'];
            $fornec->complemento = $newfornec['complemento'];
            $fornec->email = $newfornec['email'];
            $fornec->telefone = $newfornec['telefone'];

            $fornec->save();
            return redirect()->route('fornecedor.index')->with('success', 'Fornecedor atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->route('fornecedor.index')->with('error', 'Erro ao atualizar o fornecedor.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fornecedor $fornec)
    {
        try {
            $fornec->delete();
            return redirect()->route('fornecedor.index')->with('success', 'Fornecedor excluído com sucesso!');
        } catch (\Exception $e) {
            //Verifica se o erro é de integridade referencial (chave estrangeira)
            if ($e->getCode() == 23000) {
                return redirect()->route('fornecedor.index')->with('error', 'Não foi possível excluir o fornecedor porque existem registros vinculados a ele em outras tabelas.');
            }
            return redirect()->route('fornecedor.index')->with('error', '$e->getMessage()');
        }
    }
}