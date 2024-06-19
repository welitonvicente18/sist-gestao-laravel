@extends('app.layouts.basico')

@section('titulo', 'Produto Adicionar')

@section('conteudo')

<div class="conteudo-pagina">
    <div class="titulo-pagina-2">
        <h1>Novo Produto</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.produto.index')}}">Voltar</a></li>
        </ul>
    </div>

    <div class="informacao-pagina">
        <div style="width: 30%;margin-left: auto;margin-right: auto">

            @if(isset($produto->id))
            <form action="{{ route('app.produto.update', $produto->id)}}" method="post">
                @method('PUT')
                @else
                <form action="{{ route('app.produto.store')}}" method="post">
                    @method('POST')
                    @endif

                    @csrf
                    <input type="text" name="nome" placeholder="Nome" value="{{ $produto->nome ?? old('nome')}}" class="borda-preta" />
                    @error('nome')
                    {{$message}}
                    @enderror
                    <input type="text" name="descricao" placeholder="Descrição" value="{{ $produto->descricao ?? old('descricao')}}" class="borda-preta" />
                    @error('site')
                    {{$message}}
                    @enderror
                    <input type="text" name="peso" placeholder="Peso" value="{{ $produto->peso ?? old('peso')}}" class="borda-preta" />
                    @error('uf')
                    {{$message}}
                    @enderror
                    <select name="unidade_id">
                        <option value=""> Escolha... </option>
                        @foreach($unidades as $unidade)
                        <option value="{{$unidade->id}}"> {{ $unidade->descricao}} </option>
                        @endforeach
                    </select>
                    @error('email')
                    {{$message}}
                    @enderror
                    <button type="submit">Salvar</button>
                </form>
        </div>
    </div>
</div>

@endsection