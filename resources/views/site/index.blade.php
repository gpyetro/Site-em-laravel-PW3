@extends('site.layouts.basico')

@section('titulo', 'Home - Etec Zona Leste')

@section('conteudo')
    <img class="imagem-pagina" src="{{ asset('img1.jpg') }}" alt="Etec Zona Leste - imagem institucional">
    <h1 class="titulo">Etec Zona Leste</h1>
    <p class="texto">
        Seja bem-vindo ao site institucional da Etec Zona Leste. Aqui você encontra informações sobre nossa escola,
        cursos oferecidos e canais de contato.
    </p>
@endsection

