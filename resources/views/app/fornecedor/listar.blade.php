@extends('app.layouts.basico')

@section('titulo', 'Fornecedor Listar')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <h1>Fornecedor Listar</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.create')}}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor.index')}}">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina">
        <div>
            ... Listar ...
        </div>
    </div>
</div>

@endsection