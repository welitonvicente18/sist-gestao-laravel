<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Unidade;

class ProdutoController extends Controller
{

    /**
     * Undocumented function
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $produtos = Produto::all();
        return view("app.produto.index", ['produtos' => $produtos]);
    }

    /**
     * Undocumented function
     *
     * @param  [type] $id
     * @return void
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        $unidades = Unidade::all();
        return view('app.produto.create', ['produto' => $produto, 'unidades' => $unidades]);
    }

    /**
     * Undocumented function
     *
     * @param  \Illuminate\Http\Request $request
     * @param  [type]                   $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|min:3|max:255',
            'descricao' => 'required|min:3|max:255',
            'peso' => 'required|integer',
            'unidade_id' => 'required|integer|exists:unidades,id',
        ]);

        $produto = Produto::find($id);
        $produto->update($request->all());

        return redirect()->route('app.produto.index')->with('msg', 'Atualizado com sucesso');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();

        return redirect()->route('app.produto.index')->with('msg', 'Excluído com sucesso');
    }
}
