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
         @error('descricao')
         {{$message}}
         @enderror
         <input type="text" name="peso" placeholder="Peso" value="{{ $produto->peso ?? old('peso')}}" class="borda-preta" />
         @error('peso')
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