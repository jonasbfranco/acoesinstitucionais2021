@extends('layouts.main')

@section('title', 'Ações Institucionais 2021 - Painel Administrador')

@section('content')

<div class="container-fluid">


        <p class="dash-titulo">Editando: {{ $editpalestra->titulo }}</p>

        <div class="container-create-edit">

            <form action="/admin/update/{{ $editpalestra->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <input type="text" name="titulo" value="{{ $editpalestra->titulo }}" class="form-control" id="titulo" placeholder="Digite o titulo do video" required autofocus>
                </div>
                <div class="mb-3">
                    <input type="number" name="duracao" value="{{ $editpalestra->duracao }}" class="form-control" id="duracao" placeholder="Digite o tempo de duração" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="caminho_video" value="{{ $editpalestra->caminho_video }}" class="form-control" id="caminho_video" placeholder="Digite o caminho do video" required>
                </div>
                <div class="mb-3">
                    <input type="date" name="data_liberacao" value="{{ $editpalestra->data_liberacao }}" class="form-control" id="data" placeholder="Digite a data de liberação" required>
                </div>
                <button type="submit" class="btn btn-success btn-create-edit"><i class="fas fa-save icon"></i> Salvar</button>
            </form>

            <a href="{{ url()->previous() }}"><button class="btn btn-danger btn-create-edit"><i class="fas fa-ban icon"></i> Cancelar</button></a>

        </div>{{-- Fim do container --}}



    <p>No campo duração, verificar o total de minutos do video e multiplicar por 2000,
        o resultado é o valor que sera incluido no campo duração.</p>
    <p>Exemplo: Video de 15 minutos, 15x2000 = 30000</p>


</div> <!-- Fim DIV Container Login -->

@endsection

