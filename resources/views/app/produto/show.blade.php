@extends('app.layouts.basico')

@section('titulo', 'Produto Adicionar')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <h1>Visualizar Produto</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.produto.index')}}">Voltar</a></li>
        </ul>
    </div>

    <div class="informacao-pagina">
        <div style="width: 30%;margin-left: auto;margin-right: auto">

            <table border="1">
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Descrição</td>
                    <td>Peso</td>
                    <td>unidade</td>
                </tr>
                <tr>
                    <td>{{$produto->id}}</td>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->descricao}}</td>
                    <td>{{$produto->peso}}</td>
                    <td>{{$produto->unidade_id}}</td>
                </tr>
            </table>

        </div>
    </div>
</div>

@endsection