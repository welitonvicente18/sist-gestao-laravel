@extends('app.layouts.basico')

@section('titulo', 'Produto Adicionar')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">

        <h1>{{ isset($produto->id) ? 'Editar Produto': 'Novo Produto' }}</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.produto.index')}}">Voltar</a></li>
        </ul>
    </div>

    <div class="informacao-pagina">
        <div style="width: 30%;margin-left: auto;margin-right: auto">

            @component('app.produto._components.form_create_edit', ['unidades' => $unidades, 'produto' => $produto])
            @endcomponent
        </div>
    </div>
</div>

@endsection