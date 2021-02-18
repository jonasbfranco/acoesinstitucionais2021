@extends('layouts.main')

@section('title', 'Ações Institucionais 2021')

@section('content')

<div class="container-login">
    <div>
        <img class="img-login" src="img/logo.png" alt="">
        <h1>Ações Institucionais 2021</h1>

        <form action="/palestras">
        <div class="mb-3">
            <input type="number" class="form-control" name="funcionario" id="ImputCartão" placeholder="Digite o número do seu cartão" require="required">
        </div>
        <button type="submit" class="btn btn-primary">Acessar</button>
        </form>
    </div>
</div> <!-- Fim DIV Container Login -->

@endsection

