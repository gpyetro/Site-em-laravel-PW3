@extends('site.layouts.basico')

@section('titulo', 'Cursos - Etec Zona Leste')

@section('conteudo')
    <img class="imagem-pagina" src="{{ asset('img2.jpg') }}" alt="Cursos - Etec Zona Leste">
    <h1 class="titulo">Cursos</h1>

    <ul class="lista">
        <li class="lista__item">
            <strong>Desenvolvimento de Sistemas</strong><br>
            Aprende a criar sites e sistemas, trabalhar com lógica de programação, banco de dados, APIs, versionamento
            e boas práticas de desenvolvimento.
        </li>
        <li class="lista__item">
            <strong>Administração</strong><br>
            Desenvolve conhecimentos em gestão, organização de processos, rotinas administrativas, atendimento,
            noções de finanças, marketing e empreendedorismo.
        </li>
        <li class="lista__item">
            <strong>Recursos Humanos</strong><br>
            Foca em recrutamento e seleção, treinamento e desenvolvimento, departamento pessoal, legislação básica,
            comunicação interna e práticas de gestão de pessoas.
        </li>
        <li class="lista__item">
            <strong>Contabilidade</strong><br>
            Estuda registros contábeis, noções de tributação, análise de demonstrativos, rotinas fiscais e uso de
            ferramentas para controle e organização financeira.
        </li>
        <li class="lista__item">
            <strong>Logística</strong><br>
            Trabalha com cadeia de suprimentos, armazenagem, controle de estoque, transporte, roteirização,
            planejamento e indicadores para melhorar prazos e custos.
        </li>
    </ul>
@endsection

