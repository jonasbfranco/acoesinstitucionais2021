<?php

namespace App\Http\Controllers;

use App\Models\funcionario;
use Illuminate\Http\Request;


class FuncionarioController extends Controller
{
    
    //=================================================================
    // Funcao para efetuar o login
    //=================================================================
    public function login(Request $request) {

        $cartao = $request->cartao;

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
            return redirect('/cadastro?cartao='.$cartao)->with('msg', 'Cartão '.$cartao.' não encontrado, cadastre-se!!!');
        }

    } //Fim da function Login


    //=================================================================
    // Funcao para efetuar o logout 
    //=================================================================
    public function logout() {
        @session_start();
        @session_destroy();
        return view('welcome');
    } //Fim da function Logout


    //=================================================================
    // Funcao de redirecionamento a tela de cadastro
    //=================================================================
    public function cadastro() {
        return view('cadastro');
    } // Fim da funcao de redireciomanento


    //=================================================================
    // Funcao para cadastrar novo funcionario
    //=================================================================
    public function salvando(Request $request) {

        $cartao     = $request->cartao;
        $nome       = $request->nome;
        $unidade    = $request->unidade;

        if ($unidade == 'Escolha sua unidade') {
            return redirect('/cadastro?cartao='.$cartao.'&nome='.$nome)->with('msg', 'Escolha sua Unidade!!!');
        }
        
        if (funcionario::where('cartao', '=', $cartao)->first()) {
          return redirect('/?cartao='.$cartao)->with('msg', $cartao.' cadastro existente!!!');  
        } else {

        

        $cadfuncionario = new funcionario; //nome da model da tabela funcionario

        $cadfuncionario->nome     = $request->nome;
        $cadfuncionario->cartao   = $request->cartao;
        $cadfuncionario->unidade  = $request->unidade;
        $cadfuncionario->data     = now();

        $cadfuncionario->save();

        return redirect('/?cartao='.$cartao)->with('msg', $nome.' cadastro efetuado com sucesso!!!');

        } //Fim do if

    } //Fim da function cadastrar  


    //=================================================================
    // Funcao para cadastrar novo funcionario
    //=================================================================
    public function confirmando(Request $request) {

        $cartao     = $request->cartao;
        $nome       = $request->nome;
        $unidade    = $request->unidade;

        if (!empty($cartao)) {
            return redirect('/confirma')->with('msg', 'Confirmado com sucesso!!!');
        }
        
        if (funcionario::where('cartao', '=', $cartao)->first()) {
          return redirect('/?cartao='.$cartao)->with('msg', $cartao.' cadastro existente!!!');  
        } else {

        

        $cadfuncionario = new funcionario; //nome da model da tabela funcionario

        $cadfuncionario->nome     = $request->nome;
        $cadfuncionario->cartao   = $request->cartao;
        $cadfuncionario->unidade  = $request->unidade;
        $cadfuncionario->data     = now();

        $cadfuncionario->save();

        return redirect('/?cartao='.$cartao)->with('msg', $nome.' cadastro efetuado com sucesso!!!');

        } //Fim do if

    } //Fim da function confirmando


} //Fim do Controller
