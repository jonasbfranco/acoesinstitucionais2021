@extends('layouts.main')

@section('title', 'Ações Institucionais 2021 - Painel Administrador')

@section('content')

<div class="container-login">


    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
    @endif



    <h1>Painel do Administrador</h1>

    <a href="/admin/create"><button class="btn btn-success">Incluir</button></a>

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
            @foreach ($showpalestras as $showpalestra)
            <tr>
            <td>{{ $showpalestra->titulo }}</td>
            <td>{{ $showpalestra->duracao }}</td>
            <td>{{ $showpalestra->nome_video }}</td>
            <td>{{ $showpalestra->data_liberacao }}</td>
            <td><a href="/admin/edit/{{ $showpalestra->id }}"><button class="btn btn-primary">Editar</button></a></td>
            <td><a href="/admin/excluir/{{ $showpalestra->id }}"><button class="btn btn-danger">Excluir</button></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {!! $showpalestras->links() !!}


    <p>No campo duração, verificar o total de minutos do video e multiplicar por 2000, o resultado é o valor que sera incluido no campo duração.</p>
    <p>Exemplo: Video de 15 minutos, 15x2000 = 30000</p>

</div> <!-- Fim DIV Container Login -->

@endsection

