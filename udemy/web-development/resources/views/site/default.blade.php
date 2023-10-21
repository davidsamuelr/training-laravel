{{-- <h3>Principal</h3>

<ul>
    <li><a href="{{ route('site.default') }}">Principal</a></li>
    <li><a href="{{ route('site.contact') }}">Contato</a></li>
    <li><a href="{{ route('site.about') }}">Sobre</a></li>
</ul> --}}

@extends('site.layouts.basic') {{-- determina o template a ser extendido na view --}}

@section('title', $title) {{-- enviando valor para yield title --}}

@section('content')
    {{-- definição da sessão conteúdo --}}

    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.
                <p>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </div>

            <div class="video">
                <img src="img/player_video.jpg">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.
                <p>
                @component('site.layouts._components.contact_form', ['class' => 'borda-branca'])
                    {{-- adicionando componente formulário --}}
                @endcomponent
            </div>
        </div>
    </div>
@endsection

