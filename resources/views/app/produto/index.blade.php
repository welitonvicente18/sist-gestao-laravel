@extends('app.layouts.basico')

@section('titulo', 'Produto')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <h1>Produto - Listar</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.produto.create') }}">Novo</a></li>
        </ul>
    </div>
    <div class="informacao-pagina">
        <div style="width: 50%;margin-left: auto;margin-right: auto">
            <div style="margin:0px">
                <form action="{{ route('app.produto.index') }}" method="post">
                    @csrf
                    <input type="hidden" name="search" value="true" />
                    <input type="text" name="nome" value="{{ $params->nome ?? '' }}" placeholder="Nome" class="borda-preta" style="width:20%">
                    <input type="text" name="site" value="{{ $params->site ?? '' }}" placeholder="Site" class="borda-preta" style="width:20%">
                    <input type="text" name="email" value="{{ $params->email ?? '' }}" placeholder="E-mail" class="borda-preta" style="width:20%">
                    <input type="text" name="uf" value="{{ $params->uf ?? '' }}" placeholder="UF" class="borda-preta" style="width:20%">
                    <br>
                    <button type="submit" class="borda-preta" style="width:20%">Pesquisar</button>
                </form>
            </div>

            @if(isset($msg))
            <div class="alert alert-success">
                {{ $msg }}
            </div>
            @endif
            <table width="100%" border="1 solid #000">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Descrição</th>
                        <th>Peso</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($produtos))
                    @foreach($produtos as $produto)
                    <tr>
                        <td>{{ $produto->nome}}</td>
                        <td>{{ $produto->descricao}}</td>
                        <td>{{ $produto->peso}}</td>
                        <td>
                            <button><a href="{{ route('app.fornecedor.edit', $produto->id)}}">Editar</a> </button>
                            <form action="{{ route('app.fornecedor.destroy', $produto->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button href="#" type="submit" onclick="return confirm('Deseja excluir o fornecedor?') ? true : false ">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <div>
            </div>

        </div>
    </div>
</div>

@endsection