<?php

namespace App\Http\Controllers;

use App\Models\ProdutoDetalhe;
use Illuminate\Http\Request;
use App\Models\Unidade;

class ProdutoDetalheController extends Controller
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
        $unidades = Unidade::all();
        return view('app.produto_detalhe.create', ['unidades' => $unidades]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'comprimento' => 'required|numeric',
            'largura' => 'required|numeric',
            'altura' => 'required|numeric'
        ]);

        $produtoDetalhe = new ProdutoDetalhe();
        $produtoDetalhe->create($request->all());

        return redirect()->route('app.produtodetalhe.index');
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
