@extends('layouts.main')

@section('title', 'Ações Institucionais 2021')

@section('content')

<div class="container-login">

    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
    @endif

    <img class="img-login" src="img/logo.png" alt="">
    <h1>Ações Institucionais 2021</h1>

    <form action="/palestras">
    <div class="mb-3">
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o número do seu cartão">
    </div>
    <button type="submit" class="btn btn-primary">Acessar</button>
    </form>

</div> <!-- Fim DIV Container Login -->

@endsection

