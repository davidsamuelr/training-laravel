<h3>Fornecedores</h3>

{{-- Comentário de código interpretado pelo blade --}}

{{ 'Texto interpretado pelo blade' }}<br/>
<?= 'Texto interpretado pelo PHP ' ?><br/>

@php
    // comentário de uma linha em php
    /*
        comentário de multiplas linhas em php
    */
    echo "Bloco PHP";
@endphp

{{-- @dd($providers) exibe valor do array passado pelo controlador --}}

@if(count($providers) > 0 && count($providers) < 10)
    <h3>Existe alguns fornecedores cadastrados</h3>
@elseif(count($providers) > 10)
    <h3>Existe vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existe fornecedores cadastrados</h3>
@endif

Fornecedor: {{ $providers[0]['nome'] }}<br/>
Status: {{ $providers[0]['status'] }}<br/><br/>

@if($providers[0]['status'] == 'N')
    Fornecedor inativo
@endif
<br/>
@unless($providers[0]['status'] == 'S')
    {{-- se retorno da condição for false --}}
    Fornecedor inativo
@endunless

<br/><br/>

@isset($providers)
    {{-- retorna true se variável estiver definida --}}
    Variável definida<br/>
    Fornecedor: {{ $providers[1]['nome'] }}<br/>
    Status: {{ $providers[1]['status'] }}<br/>
    @isset($providers[0]['cnpj'])
        {{-- retorna true se índice do array estiver definido --}}

        CNPJ: {{$providers[0]['cnpj']}}

        @empty($providers[0]['cnpj'])
            {{-- retorna true se variável ou índice do array estiver vazio --}}
            - Índice vazio
        @endempty
        <br/>

        {{-- condição ternaria no blade --}}
        CNPJ: {{$providers[1]['cnpj'] ?? 'Dado não preenchido'}}

        <br/><br/>

        {{-- switch no blade --}}
        Telefone: {{$providers[1]['ddd'] ?? ''}} - {{$providers[1]['telefone'] ?? ''}}
        @switch($providers[1]['ddd'])
            @case ('11')
                São Paulo - SP
                @break
            @case ('32')
                Juiz de Fora - MG
                @break
            @case ('85')
                Fortaleza - CE
                @break
            @default
                Estado não identificado
        @endswitch

    @endisset
@endisset
<br/>

{{-- For usando isset como condição até que a posição do array retorne false --}}
@for ($i = 0; isset($providers[$i]); $i++)
    Fornecedor: {{ $providers[$i]['nome'] }}<br/>
    Status: {{ $providers[$i]['status'] }}<br/>
    CNPJ: {{ $providers[$i]['status'] }}<br/>
    Telefone: {{$providers[$i]['ddd'] ?? ''}} - {{$providers[$i]['telefone'] ?? ''}}
    <hr/>
@endfor

<br/><br/>

{{-- While --}}
@isset($providers)
    @php $i = 0 @endphp
    @while(isset($providers[$i]))
        Fornecedor: {{ $providers[$i]['nome'] }}<br/>
        Status: {{ $providers[$i]['status'] }}<br/>
        CNPJ: {{ $providers[$i]['status'] }}<br/>
        Telefone: {{$providers[$i]['ddd'] ?? ''}} - {{$providers[$i]['telefone'] ?? ''}}
        <hr/>
        @php $i++ @endphp
    @endwhile
@endisset()

<br/><br/>

{{-- Foreach --}}
@isset($providers)
    @foreach ($providers as $index => $provider)
        Fornecedor: {{ $provider['nome'] }}<br/>
        Status: {{ $provider['status'] }}<br/>
        CNPJ: {{ $provider['status'] }}<br/>
        Telefone: {{$provider['ddd'] ?? ''}} - {{$provider['telefone'] ?? ''}}
        <hr/>
    @endforeach
@endisset()


{{-- Forelse é um combinação do foreach com uma condição --}}
@isset($providers)
    @forelse ($providers as $index => $provider)
        Iteração atual: {{$loop->iteration}}<br/> {{-- disponível apenas para forelse e foreach --}}
        Fornecedor: {{ $provider['nome'] }}<br/>
        Status: {{ $provider['status'] }}<br/>
        CNPJ: {{ $provider['status'] }}<br/>
        Telefone: {{$provider['ddd'] ?? ''}} - {{$provider['telefone'] ?? ''}}<br/>
        @if ($loop->first)
            Primeira iteração
        @endif
        @if ($loop->last)
            Última iteração
            <br/>
            Total de registros: {{$loop->count}}
        @endif
        <hr/>
    @empty
        Não existe servidores cadastrados
    @endforelse
@endisset()

@{{não exibir sintaxe blade}}
