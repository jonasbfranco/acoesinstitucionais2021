@extends('layouts.main')

@section('title', 'Ações Institucionais 2021')

@section('content')

    @php
        @$cartao = $_GET['cartao'];
    @endphp

    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
    @endif

<div class="container-login">
    <div>
        <img class="img-login" src="img/logo.png" alt="">
        <h1>Ações Institucionais 2021</h1>

        <form method="post" action="{{route('funcionario.login')}}">
        @csrf
        <div class="mb-3">
            <input type="number" class="form-control" name="cartao" value="@php echo @$cartao @endphp" id="ImputCartão" placeholder="Digite o número do seu cartão" required autofocus>
        </div>
        <button type="submit" class="btn btn-primary">Acessar</button>
        </form>
    </div>
</div> <!-- Fim DIV Container Login -->

@endsection

