@extends('layouts.main')

@section('title', 'Ações Institucionais 2021 - Cadastro')

@section('content')

<div class="container-login">

    @php
        @$cartao = $_GET['cartao'];
        @$nome   = $_GET['nome'];
    @endphp

    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
    @endif

    <h1>Cadastro</h1>

    <form action="{{route('funcionario.salvar')}}" method="post">
    @csrf
    <div class="mb-3">
        <input type="text" name="nome" value="@php echo @$nome @endphp" class="form-control" id="ImputNome" placeholder="Digite seu nome completo" required autofocus>
    </div>
    <div class="mb-3">
        <input type="number" name="cartao" value="@php echo @$cartao @endphp" class="form-control" id="ImputCartao" placeholder="Digite o número do seu cartão" required>
    </div>
    <div class="form-group mb-3">
            <select class="form-control" name="unidade" id="exampleFormControlSelect1">
                <option selected>Escolha sua unidade</option>
                <option value="10">10 - Usina Ariranha</option>
                <option value="13">13 - Usina Palestina</option>
                <option value="14">14 - Usina Sta Albertina</option>
                <option value="17">17 - CIA Sta Adélia</option>
                <option value="18">18 - CIA Palestina</option>
                <option value="19">19 - CIA Sta Albertina</option>
            </select>
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>

</div> <!-- Fim DIV Container Login -->

@endsection

