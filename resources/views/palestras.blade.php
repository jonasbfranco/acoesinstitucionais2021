@extends('layouts.main')

@section('title', 'Ações Institucionais 2021 - Palestras')

@section('content')

<div class="container-video">

    {{--
        mostrar mensagem que foi confirmado com sucesso
    --}}
    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
    @endif

{{--
    /showvideo?id=10

    Fazer o @foreach para mostrar todas as palestras cadastradas
    lembrando que da ultima cadastrada para a primeira
    levar o id do video e o id do funcionario para a tabela confirmacao
    --}}

<a class="btn btn-primary" href="/showvideo">A IMPORTÂNCIA DA ATIVIDADE FÍSICA</a>

<a class="btn btn-primary" href="/showvideo">A IMPORTÂNCIA DA ATIVIDADE FÍSICA</a>

<a class="btn btn-primary" href="/showvideo">A IMPORTÂNCIA DA ATIVIDADE FÍSICA</a>

<a class="btn btn-primary" href="/showvideo">A IMPORTÂNCIA DA ATIVIDADE FÍSICA</a>

<a class="btn btn-primary" href="/showvideo">A IMPORTÂNCIA DA ATIVIDADE FÍSICA</a>

</div> <!-- Fim DIV Container Login -->

@endsection

