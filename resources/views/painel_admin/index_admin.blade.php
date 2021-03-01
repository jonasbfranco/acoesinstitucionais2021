@extends('layouts.main')

@section('title', 'Ações Institucionais 2021')

@section('content')

    @php
        @$nome = $_GET['nome'];
    @endphp

    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
    @endif

<div class="container-login">
    <div>
        <img class="img-login" src="img/logo.png" alt="">
        <h1>Ações Institucionais 2021 - Login</h1>

        <form method="post" action="{{route('admin.dashboard')}}">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="nome" value="@php echo @$nome @endphp" id="ImputUsuario" placeholder="Digite seu usuario" required autofocus>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="senha" id="ImputSenha" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div> <!-- Fim DIV Container Login -->

@endsection

