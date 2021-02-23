@extends('layouts.main')

@section('title', 'Ações Institucionais 2021 - Painel Administrador')

@section('content')

<div class="container-login">


        <h1>Editando: {{ $editpalestra->titulo }}</h1>
        <form action="/admin/update/{{ $editpalestra->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <input type="text" name="titulo" value="{{ $editpalestra->titulo }}" class="form-control" id="titulo" placeholder="Digite o titulo do video" required autofocus>
            </div>
            <div class="mb-3">
                <input type="number" name="duracao" value="{{ $editpalestra->duracao }}" class="form-control" id="duracao" placeholder="Digite o tempo de duração" required>
            </div>
            {{--
            <div class="mb-3">
                <input type="text" name="nome_video" value="@php echo @$nome @endphp" class="form-control" id="nome" placeholder="Digite o nome do video" required>
            </div>
            --}}
            <div class="mb-3">
                <input type="date" name="data_liberacao" value="{{ $editpalestra->data }}" class="form-control" id="data" placeholder="Digite a data de liberação" required>
            </div>
            <div class="mb-3">
                <input type="file" name="video" value="" class="form-control-file" id="video"  required>
                <img src="/video/{{ $editpalestra->nome_video}}" alt="{{ $editpalestra->titulo}}" class="img-preview">
            </div>


            <button type="submit" class="btn btn-success">Editar</button>
        </form>

        <a href="/admin"><button class="btn btn-danger">Cancelar</button></a>




    <p>No campo duração, verificar o total de minutos do video e multiplicar por 2000, o resultado é o valor que sera incluido no campo duração.</p>
    <p>Exemplo: Video de 15 minutos, 15x2000 = 30000</p>


</div> <!-- Fim DIV Container Login -->

@endsection

