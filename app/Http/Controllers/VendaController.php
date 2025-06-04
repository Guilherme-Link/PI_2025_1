<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function create()
    {
        $produtos = Produto::all();
        return view('cadastroVenda', compact('produtos'));
    }
} 