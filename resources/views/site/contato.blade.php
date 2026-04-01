@extends('site.layouts.basico')

@section('titulo', 'Contato - Etec Zona Leste')

@section('conteudo')
    <h1 class="titulo">Contato</h1>
    <p class="texto">Preencha o formulário abaixo e retornaremos o mais breve possível.</p>

    @if (session('sucesso'))
        <div class="alerta alerta--sucesso">
            {{ session('sucesso') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alerta alerta--erro">
            <strong>Verifique os campos:</strong>
            <ul class="alerta__lista">
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('site.layouts._components.form_contato')
@endsection

