@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <h1>Fornecedor - Listar</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.create') }}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor.index') }}">Consulta</a></li>
        </ul>
    </div>
    <div class="informacao-pagina">
        <div style="width: 50%;margin-left: auto;margin-right: auto">
            <div style="margin:0px">
                <form action="{{ route('app.fornecedor.index') }}" method="post">
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
                        <th>nome</th>
                        <th>e-mail</th>
                        <th>UF</th>
                        <th>Site</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($fornecedores))
                    @foreach($fornecedores as $fornecedor)
                    <tr>
                        <td>{{ $fornecedor->nome}}</td>
                        <td>{{ $fornecedor->email}}</td>
                        <td>{{ $fornecedor->uf}}</td>
                        <td>{{ $fornecedor->site}}</td>
                        <td>
                            <a href="{{ route('app.fornecedor.edit', $fornecedor->id)}}"> Editar</a>

                            <form action="{{ route('app.fornecedor.destroy', $fornecedor->id)}}" method="delete">
                                @method('DELETE')
                                @csrf
                                <a href="#" onclick="confirm('Deseja excluir o fornecedor?')">Delete
                                </a>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <div>
                {{ $fornecedores->appends($params)->links('pagination::bootstrap-4') }}
                Total - {{ $fornecedores->count() }}
            </div>

        </div>
    </div>
</div>

@endsection