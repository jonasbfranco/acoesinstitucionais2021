<?php

namespace App\Http\Controllers;

use App\Models\funcionario;
use Illuminate\Http\Request;


class FuncionarioController extends Controller
{
    //
    public function login(Request $request) {

        $cartao = $request->funcionario;

        $funcionario = funcionario::where('cartao', '=', $cartao)->first();

        if(@$funcionario->id != null) {
            @session_start();
            $_SESSION['id']         = $funcionario->id;
            $_SESSION['nome']       = $funcionario->nome;
            $_SESSION['cartao']     = $funcionario->cartao;
            $_SESSION['unidade']    = $funcionario->unidade;

            if($_SESSION['cartao'] != null) {
                return view('palestras');
            }

        } else {
            // echo "<script language='javascript'> window.alert('Dados Incorretos!')</script>";
            //return view('welcome');
            return redirect('cadastro')->with('msg', 'Cartão '.$cartao.' não encontrado, cadastre-se!!!');
        }

    }

    public function logout() {
        @session_start();
        @session_destroy();
        return view('welcome');
    }

} //Fim da function Login
