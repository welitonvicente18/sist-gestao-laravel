@extends('app.layouts.basico')

@section('titulo', 'Fornecedor Adicionar')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <h1>Novo Fornecedo</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.fornecedor.create')}}">Novo</a></li>
            <li><a href="{{ route('app.fornecedor.index')}}">Consulta</a></li>
        </ul>
    </div>

    <div class="informacao-pagina">
        <div style="width: 30%;margin-left: auto;margin-right: auto">

            @if(isset($fornecedor->id))
            <form action="{{ route('app.fornecedor.update', $fornecedor->id)}}" method="post">
                @method('PUT')
                @else
                <form action="{{ route('app.fornecedor.store')}}" method="post">
                    @method('POST')
                    @endif

                    @csrf
                    <input type="text" name="nome" placeholder="Nome" value="{{ $fornecedor->nome ?? old('nome')}}" class="borda-preta" />
                    @error('nome')
                    {{$message}}
                    @enderror
                    <input type="text" name="site" placeholder="Site" value="{{ $fornecedor->site ?? old('site')}}" class="borda-preta" />
                    @error('site')
                    {{$message}}
                    @enderror
                    <input type="text" name="uf" placeholder="UF" value="{{ $fornecedor->uf ?? old('uf')}}" class="borda-preta" />
                    @error('uf')
                    {{$message}}
                    @enderror
                    <input type="text" name="email" placeholder="E-mail" value="{{ $fornecedor->email ?? old('email')}}" class="borda-preta" />
                    @error('email')
                    {{$message}}
                    @enderror
                    <button type="submit"  >Salvar</button>
                </form>
        </div>
    </div>
</div>

@endsection