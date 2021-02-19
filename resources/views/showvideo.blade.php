@extends('layouts.main')

@section('title', 'Ações Institucionais 2021 - Video')

@section('content')


<div class="container-video">
    <div class="ratio ratio-16x9 mb-1">
        <iframe
            src="../video/teste.mp4"
            title="Teste Video"
            allowfullscreen>
        </iframe>
    </div>
</div> <!-- Fim da Container Video -->



<form action="/confirma" method="get">
    <input id="teste" style="display:none;" type="submit" value="Ir a tela de confirmação " name="confirmar" class="w-100 btn btn-lg btn-primary mb-5">
    <!-- <button id="teste" style="display:none;" class="w-100 btn btn-lg btn-primary mb-5" type="submit" value="confirmar" name="confirmar">Confirmação do Cadastro</button> -->
</form>



<!-- Optional JavaScript; choose one of the two! -->
<script src="js/jquery-3.5.1.min.js"></script>



<script>
    $( document ).ready(function() {
        // setTimeout(carregar, 1500000); //25 minutos
        // setTimeout(carregar, 4000); //2 minutos
        setTimeout(carregar, 2000); //1 minutos
    });
    
    function carregar() {
        // window.location.href = "/confirma";
        $('#teste').show();
    }


</script>


@endsection

