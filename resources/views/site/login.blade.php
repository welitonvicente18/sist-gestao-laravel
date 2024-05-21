@extends('site.layouts.basico')

@section('conteudo')
<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Entre em contato conosco</h1>
    </div>
    <div style="width: 30%;margin-left: auto;margin-right: auto;">
        <form action="{{ route('site.login') }}" method="post">
            @csrf

            @if(isset($error) && $error == 'true')
            <span class="text-danger">E-mail ou senha inválidos</span>
            @endif

            <input name="email" type="email" value="{{ old('email') }}" placeholder="Seu e-mail" class="borda-preta" />
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <input name="password" type="password" value="{{ old('password') }}" placeholder="Senha" class="borda-preta" />
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <button type="submit">Logar</button>
        </form>
    </div>

</div>

<div class="rodape">
    <div class="redes-sociais">
        <h2>Redes sociais</h2>
        <img src="{{ asset('img/facebook.png') }}">
        <img src="{{ asset('img/linkedin.png') }}">
        <img src="{{ asset('img/youtube.png') }}">
    </div>
    <div class="area-contato">
        <h2>Contato</h2>
        <span>(11) 3333-4444</span>
        <br>
        <span>supergestao@dominio.com.br</span>
    </div>
</div>
@endsection