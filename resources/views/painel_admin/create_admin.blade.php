@extends('layouts.main')

@section('title', 'Ações Institucionais 2021 - Painel Administrador')

@section('content')

<div class="container-fluid">

    <p class="dash-titulo">Painel Inclusão</p>

    <div class="container-create-edit">

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
                <input type="file" name="nome_video" value="@php echo @$video @endphp" class="form-control-file" id="nome_video"  required>
            </div>
            <br />
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    0%
                </div>
            </div>
            <br />
            <div id="success">

            </div>
            <br />

            <button type="submit" name="salvar" class="btn btn-success btn-create-edit progress-ajax"><i class="fas fa-save icon"></i> Salvar</button>
        </form>

        <a href="{{ url()->previous() }}"><button class="btn btn-danger btn-create-edit"><i class="fas fa-ban icon"></i> Cancelar</button></a>

        {{-- <a href="/admin"><button class="btn btn-danger">Cancelar</button></a> --}}

        </div> {{-- Fim do Container --}}

        {{-- nome_video = file
             salvar = upload
            --}}
        <script>
            $(document).ready(function() {

                $('form').ajaxForm({
                    beforeSend:function(){
                        $('success').empty();
                    },
                    uploadProgress:function(event, position, total, percentComplete)
                    {
                        $('.progress-bar').text(percentComplete + '%');
                        $('.progress-bar').css('width', percentComplete + '%');
                    },
                    success:function(data)
                    {
                        if(data.errors)
                        {
                            $('.progress-bar').text('0%');
                            $('.progress-bar').css('width', '0%');
                            $('success').html('<span class="text-danger"<br>' +data.errors+'</br></span>');
                        }
                        if(data.success)
                        {
                            $('.progress-bar').text('Uploaded Completo');
                            $('.progress-bar').css('width', '100%');
                            $('success').html('<span class="text-success"<br>' +data.success+'</br></span>');
                            $('success').append(data.image);
                        }
                    }
                });

            });
        </script>


    <p>No campo duração, verificar o total de minutos do video e multiplicar por 2000, o resultado é o valor que sera incluido no campo duração.</p>
    <p>Exemplo: Video de 15 minutos, 15x2000 = 30000</p>


</div> <!-- Fim DIV Container Login -->



@endsection

