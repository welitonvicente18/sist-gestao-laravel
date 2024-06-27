@if(isset($produtodetalhe->id))
    <form action="{{ route('app.produtodetalhe.update', $produtodetalhe->id)}}" method="post">
        @method('PUT')
@else
    <form action="{{ route('app.produtodetalhe.store')}}" method="post">
        @method('POST')
@endif

        @csrf
        <input type="text" name="comprimento" placeholder="Comprimento" value="{{ $produtodetalhe->comprimento ?? old('comprimento')}}" class="borda-preta" />
        @error('comprimento')
            {{$message}}
        @enderror
        <input type="text" name="largura" placeholder="Largura" value="{{ $produtodetalhe->largura ?? old('largura')}}" class="borda-preta" />
        @error('largura')
            {{$message}}
        @enderror
        <input type="text" name="altura" placeholder="Altura" value="{{ $produtodetalhe->altura ?? old('altura')}}" class="borda-preta" />
        @error('altura')
            {{$message}}
        @enderror
        <select name="unidade_id">
            <option value=""> Escolha... </option>
            @foreach($unidades as $unidade)
                <option value="{{$unidade->id}}" {{isset($produto->unidade_id) && $produto->unidade_id == $unidade->id ? 'selected' : ''}}> {{ $unidade->descricao}} </option>
            @endforeach
        </select>
        @error('unidade_id')
            {{$message}}
        @enderror
        <button type="submit">Salvar</button>
    </form>