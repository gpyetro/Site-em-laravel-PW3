<form class="form" method="post" action="{{ route('site.contato.enviar') }}">
    @csrf

    <div class="form__grid">
        <div class="form__campo">
            <label for="nome" class="form__label">Nome</label>
            <input id="nome" name="nome" type="text" class="form__input" value="{{ old('nome') }}" required>
        </div>

        <div class="form__campo">
            <label for="email" class="form__label">E-mail</label>
            <input id="email" name="email" type="email" class="form__input" value="{{ old('email') }}" required>
        </div>
    </div>

    <div class="form__campo">
        <label for="assunto" class="form__label">Assunto</label>
        <input id="assunto" name="assunto" type="text" class="form__input" value="{{ old('assunto') }}" required>
    </div>

    <div class="form__campo">
        <label for="mensagem" class="form__label">Mensagem</label>
        <textarea id="mensagem" name="mensagem" rows="6" class="form__textarea" required>{{ old('mensagem') }}</textarea>
    </div>

    <div class="form__acoes">
        <button type="submit" class="btn btn--primario">Enviar</button>
        <button type="reset" class="btn btn--secundario">Limpar</button>
    </div>
</form>

