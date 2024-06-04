<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index(Request $request)
    {
        $params = [];
        if (isset($request->search) && $request->search == 'true') {
            $params = $request->except('_token');

            $fornecedores = Fornecedor::where("nome", 'like', '%' . $params['nome'] . '%')
                ->where("site", 'like', '%' . $params['site'] . '%')
                ->where("email", 'like', '%' . $params['email'] . '%')
                ->where("uf", 'like', '%' . $params['uf'] . '%')
                ->paginate(1);
        } else {
            $fornecedores = Fornecedor::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('app.fornecedor.index', ['fornecedores' => $fornecedores, 'params' => $params]);
    }

    public function create()
    {
        return view('app.fornecedor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'site' => 'required',
            'uf' => 'required|min:2|max:2',
            'email' => 'required|email',
        ]);

        $fornecedor = new Fornecedor();
        $fornecedor->create($request->all());

        return redirect()->route('app.fornecedor.index')->with('msg', 'Cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $fornecedor = Fornecedor::find($id);

        return view('app.fornecedor.create', ['fornecedor' => $fornecedor]);
    }

    public function update(Request $request, $id)
    {

        $for = Fornecedor::find($id);
        $fornecedor = $for->update($request->all());

        return view('app.fornecedor.index', ['fornecedores' => Fornecedor::all()])->with('msg', 'Editado com sucesso!');
    }
}
