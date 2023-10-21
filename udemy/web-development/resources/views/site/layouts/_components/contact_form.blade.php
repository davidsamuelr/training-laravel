{{ $slot }} {{-- recebe conteúdo entre @component e @endcomponent --}}
<form action={{ route('site.contact') }} method="post">
    @csrf {{-- formulário via post requer token csrf para evitar requisição falsa --}}
    <input name="name" type="text" placeholder="Nome" class="{{ $class }}"> {{-- recebe valor de índice de array --}}
    <br>
    <input name="phone" type="text" placeholder="Telefone" class="{{ $class }}">
    <br>
    <input name="mail" type="text" placeholder="E-mail" class="{{ $class }}">
    <br>
    <select name="reason" class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="message" class="{{ $class }}">Preencha aqui a sua mensagem</textarea>
    <br>
    <button type="submit" class="{{ $class }}">ENVIAR</button>
</form>
