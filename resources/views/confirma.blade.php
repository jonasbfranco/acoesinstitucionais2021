@extends('layouts.main')

@section('title', 'Ações Institucionais 2021')

@section('content')



<div class="container-login">

    <p class="texto-confirma">Confirme a sua participação</p>

    <form action="/confirma" method="post">
    @csrf
    <button type="submit" class="btn btn-primary text-uppercase">Confirmar</button>
    </form>

    <div class="alert alert-success" role="alert">
        Confirmação realizada com sucesso!
    </div>


</div> <!-- Fim DIV Container Login -->

@endsection

