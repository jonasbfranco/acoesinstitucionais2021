@extends('layouts.main_admin')

@section('title', 'Ações Institucionais 2021 - Painel Administrador')

@section('content')

<div class="container-login">


    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
    @endif



    <h1>Painel do Administrador</h1>

    <a href="/admin/incluir?tipo=incluir"><button class="btn btn-success">Incluir</button></a>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Duracao</th>
            <th scope="col">Nome</th>
            <th scope="col">Data da Liberação</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>A IMPORTÂNCIA DA ATIVIDADE FÍSICA</td>
            <td>40000</td>
            <td>teste</td>
            <td>22/02/2021</td>
            <td><a href="/admin/editar?tipo=editar"><button class="btn btn-primary">Editar</button></a></td>
            <td><a href="/admin/excluir"><button class="btn btn-danger">Excluir</button></a></td>
            </tr>
        </tbody>
    </table>

    <p>No campo duração, verificar o total de minutos do video e multiplicar por 2000, o resultado é o valor que sera incluido no campo duração.</p>
    <p>Exemplo: Video de 15 minutos, 15x2000 = 30000</p>

</div> <!-- Fim DIV Container Login -->

@endsection

