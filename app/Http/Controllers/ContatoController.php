<?php

namespace App\Http\Controllers;

use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        dd($request);
    }

    public function store(Request $request)
    {
        $contato = new SiteContato();

        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contato' => 'required|max:1',
        ]);
        
        dd($request);
    }
}
