{{-- <h3>Sobre</h3>

<ul>
    <li><a href="{{ route('site.default') }}">Principal</a></li>
    <li><a href="{{ route('site.contact') }}">Contato</a></li>
    <li><a href="{{ route('site.about') }}">Sobre</a></li>
</ul> --}}


@extends('site.layouts.basic') {{-- determina o template a ser extendido na view --}}

@section('title', $title) {{-- enviando valor para yield title --}}

@section('content')
    {{-- definição da sessão conteúdo --}}

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Olá, eu sou o Super Gestão</h1>
        </div>

        <div class="informacao-pagina">
            <p>O Super Gestão é o sistema online de controle administrativo que pode transformar e potencializar os
                negócios
                da sua empresa.</p>
            <p>Desenvolvido com a mais alta tecnologia para você cuidar do que é mais importante, seus negócios!</p>
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

