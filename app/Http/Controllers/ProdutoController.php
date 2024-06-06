<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Unidade;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        $produtos = Produto::all();
        return view("app.produto.index", ['produtos' => $produtos]);
    }

    public function create()
    {
        $unidades = Unidade::all();
        return view('app.produto.create', ['unidades' => $unidades]);
    }
}
