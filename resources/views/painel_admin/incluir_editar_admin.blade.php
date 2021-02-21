@extends('layouts.main_admin')

@section('title', 'Ações Institucionais 2021 - Painel Administrador')

@section('content')

<div class="container-login">

    @php
        @$tipo = $_GET['tipo'];
    @endphp

    @if (@$tipo == 'incluir')
        <h1>Painel Inclusão</h1>
    @elseif (@$tipo == 'editar')
        <h1>Painel Edição</h1>
    @else
        <h1>Painel Edição/Inclusão</h1>
    @endif





    <form action="{{route('palestra.salvar')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <input type="text" name="titulo" value="@php echo @$titulo @endphp" class="form-control" id="titulo" placeholder="Digite o titulo do video" required autofocus>
    </div>
    <div class="mb-3">
        <input type="number" name="duracao" value="@php echo @$duracao @endphp" class="form-control" id="duracao" placeholder="Digite o tempo de duração" required>
    </div>
    {{--
    <div class="mb-3">
        <input type="text" name="nome_video" value="@php echo @$nome @endphp" class="form-control" id="nome" placeholder="Digite o nome do video" required>
    </div>
    --}}
    <div class="mb-3">
        <input type="date" name="data_liberacao" value="@php echo @$data @endphp" class="form-control" id="data" placeholder="Digite a data de liberação" required>
    </div>
    <div class="mb-3">
        <input type="file" name="video" value="@php echo @$video @endphp" class="form-control-file" id="video"  required>
    </div>


    <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>

    <a href="/admin"><button class="btn btn-danger">Cancelar</button></a>


    <p>No campo duração, verificar o total de minutos do video e multiplicar por 2000, o resultado é o valor que sera incluido no campo duração.</p>
    <p>Exemplo: Video de 15 minutos, 15x2000 = 30000</p>

</div> <!-- Fim DIV Container Login -->

@endsection

