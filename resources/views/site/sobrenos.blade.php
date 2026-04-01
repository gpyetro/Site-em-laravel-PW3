@extends('site.layouts.basico')

@section('titulo', 'Sobre Nós - Etec Zona Leste')

@section('conteudo')
    <img class="imagem-pagina" src="{{ asset('img3.jpg') }}" alt="Sobre Nós - Etec Zona Leste">
    <h1 class="titulo">Sobre Nós</h1>

    <p class="texto">
        A Etec Zona Leste, fundada em 2008 na Avenida Águia de Haia, é uma instituição de referência em ensino técnico
        e tecnológico em São Paulo. Seu foco principal é a excelência educacional, unindo teoria sólida e prática
        voltada ao mercado de trabalho em áreas como Informática, Administração e Eletrônica.
    </p>

    <p class="texto">O resumo dos seus principais pilares inclui:</p>

    <ul class="lista">
        <li class="lista__item">
            <strong>Infraestrutura Moderna</strong><br>
            Possui laboratórios equipados com alta tecnologia (impressoras 3D, notebooks, TVs) em um ambiente acolhedor
            cercado por jardins.
        </li>
        <li class="lista__item">
            <strong>Desenvolvimento Integral</strong><br>
            Além das aulas, oferece atividades extracurriculares, projetos de pesquisa, networking e orientação
            vocacional para preparar o aluno para o futuro.
        </li>
        <li class="lista__item">
            <strong>Foco no Futuro</strong><br>
            A instituição se posiciona como uma facilitadora para o desenvolvimento de habilidades profissionais,
            incentivando o ingresso de novos alunos através do Vestibulinho.
        </li>
    </ul>
@endsection

