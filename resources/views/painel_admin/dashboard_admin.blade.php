@extends('layouts.main')

@section('title', 'Ações Institucionais 2021 - Painel Administrador')

@section('content')



    @php

        @session_start();

        @$logado = $_SESSION['nome'];

        if (!isset($logado)) {

            echo ("<script LANGUAGE='JavaScript'>
                    window.alert('Você precisa estar logado para acessar esta página!!!');
                    window.location.href='./';
                    </script>");
            exit;
        }

    @endphp


    <nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-fixed-top">

        <div class="container-fluid">
            <p class="navbar-user">{{ $logado }}, bem vindo.</p>
            <form action="/admin/logout" method="post" class="d-flex">
                @csrf
                <button class="btn btn-danger" type="submit">Sair<i class="fas fa-sign-out-alt icon"></i></button>
            </form>
        </div>

    </nav>

    <div class="container-fluid">

    <p class="dash-titulo">Dashboard</p>

    @if(session('msg'))
        <p class="msg">{{ session('msg') }}</p>
    @endif

    <a href="/admin/create"><button class="btn btn-success"><i class="fas fa-plus icon"></i>Incluir</button></a>


        <table class="table">
            <thead>
                <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Duracao</th>
                <th scope="col">Caminho do video</th>
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
                <td>{{ $showpalestra->caminho_video }}</td>
                <td>{{ $showpalestra->data_liberacao }}</td>
                <td><a href="/admin/edit/{{ $showpalestra->id }}"><button class="btn btn-primary"><i class="far fa-edit icon"></i>Editar</button></a></td>
                <td>
                    <form action="/admin/delete/{{ $showpalestra->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt icon"></i>Excluir</button>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pages">
            {!! $showpalestras->links() !!}
        </div>


</div> <!-- Fim DIV Container Login -->

@endsection

