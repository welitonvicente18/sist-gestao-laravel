<div class="topo">
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}">
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.home') }}">Home</a></li>
            <li><a href="{{ route('app.cliente') }}">Cliente</a></li>
            <li><a href="{{ route('app.fornecedor.index') }}">Fornecedor</a></li>
            <li><a href="{{ route('app.produto.index') }}">Produto</a></li>
            <li><a href="{{ route('app.logout') }}">Sair</a></li>
        </ul>
    </div>
</div>