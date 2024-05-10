@extends('site.layouts.basico')

@section('titulo', 'Produtos')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Produtos</h1>
        </div>

        <div class="informacao-pagina">
            <h2>Lista de Produtos</h2>
            <ul>
                @foreach($produtos as $produto)
                <li>
                    <strong>{{ $produto['nome'] }}</strong><br>
                    <em>Descrição:</em> {{ $produto['descricao'] }}<br>
                    <em>Preço:</em> {{ $produto['preco'] }}<br><br>
                </li>
                @endforeach
            </ul>
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
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
