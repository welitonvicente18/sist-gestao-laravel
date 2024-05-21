{{ $slot }}
{{ $errors }}
<form action={{ route('site.store') }} method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo_contato" class="{{ $classe }}">
        <option value="" {{ old('motivo_contato') == '' ? 'selected':'' }}>Qual o motivo do contato?</option>
        <option value="1" {{ old('motivo_contato') == '1' ? 'selected':'' }}>Dúvida</option>
        <option value="2" {{ old('motivo_contato') == '2' ? 'selected':'' }}>Elogio</option>
        <option value="3" {{ old('motivo_contato') == '3' ? 'selected':'' }}>Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}">{{ old('mensagem') ? old('mensagem') : '' }}</textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>