<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Etec Zona Leste')</title>
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
</head>
<body>
    <header class="topo">
        <div class="container topo__conteudo">
            <a class="marca" href="{{ route('site.index') }}">
                <img class="marca__logo" src="{{ asset('img5.jpg') }}" alt="Etec Zona Leste">
                <span class="marca__texto">Etec Zona Leste</span>
            </a>

            <nav class="menu">
                <a class="menu__link" href="{{ route('site.index') }}">Home</a>
                <a class="menu__link" href="{{ route('site.cursos') }}">Cursos</a>
                <a class="menu__link" href="{{ route('site.sobrenos') }}">Sobre Nós</a>
                <a class="menu__link" href="{{ route('site.galeria') }}">Galeria</a>
                <a class="menu__link" href="{{ route('site.contato') }}">Contato</a>
            </nav>
        </div>
    </header>

    <main class="conteudo">
        <div class="container">
            @yield('conteudo')
        </div>
    </main>

    <footer class="rodape">
        <div class="container rodape__conteudo">
            <span>© {{ date('Y') }} Etec Zona Leste</span>
        </div>
    </footer>
</body>
</html>

