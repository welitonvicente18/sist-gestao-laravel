@extends('app.layouts.basico')

@section('titulo', 'Fornecedor')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <h1>Entre em contato conosco</h1>
    </div>
</div>

<div class="menu">
    <ul>
        <li>Novo</li>
        <li>Consulta</li>
    </ul>
</div>

<div class="informacao-pagina">
    <div>
        <form>
            <input type="text" name="nome" placeholder="Nome" class="borda-preta"/>
            <input type="text" name="site" placeholder="Site" class="borda-preta"/>
            <input type="text" name="uf" placeholder="UF" class="borda-preta"/>
            <input type="text" name="email" placeholder="E-mail" class="borda-preta"/>
            <button type="submit">Pesquisar</button>
        </form>
    </div>
</div>

@endsection