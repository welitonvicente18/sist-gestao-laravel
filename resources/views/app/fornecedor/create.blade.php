@extends('app.layouts.basico')

@section('titulo', 'Fornecedor Adicionar')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <h1>Entre em contato conosco</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="">Novo</a></li>
            <li><a href="">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina">
        <div style="width: 30%;margin-left: auto;margin-right: auto">
            <form action="{{ route('app.fornecedor.listar')}}" method="post">
                @csrf
                <input type="text" name="nome" placeholder="Nome" class="borda-preta" />
                <input type="text" name="site" placeholder="Site" class="borda-preta" />
                <input type="text" name="uf" placeholder="UF" class="borda-preta" />
                <input type="text" name="email" placeholder="E-mail" class="borda-preta" />
                <button type="submit">Pesquisar</button>
            </form>
        </div>
    </div>
</div>

@endsection