@extends('layouts.main')

@section('title', 'Ações Institucionais 2021')

@section('content')

    @php
        @$nome = $_GET['nome'];
    @endphp



<div class="container-login">
    <div>
        @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
        @endif

        <img class="img-login" src="/img/logo.png" alt="">
        <p class="text-titulo">Ações Institucionais 2021</p>


        <form method="post" action="{{route('admin.dashboard')}}">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="nome" value="@php echo @$nome @endphp" id="ImputUsuario" placeholder="Digite seu usuario" required autofocus>
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" name="senha" id="ImputSenha" placeholder="Digite sua senha" required>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary button-customize"><i class="fas fa-user icon"></i> Login</button>
        </div>
        </form>
    </div>
</div> <!-- Fim DIV Container Login -->

@endsection

