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
        $fornec = $request->all();
        Fornecedor::create($fornec);
        return redirect()->route('fornecedor.index');
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
        $fornecedor = Fornecedor::findOrFail($id);
        return view('editarFornecedor', compact('fornecedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update($request->all());
        return redirect()->route('fornecedor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
