<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

//use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function index() {
        return view ('painel_admin.index_admin');
    }

    //=================================================================
    // Funcao para efetuar o login e mostrar todas as Palestras
    //=================================================================
    public function dashboard(Request $request) {

        $nome = $request->nome;
        $senha = $request->senha;


        $usuario = usuario::where('nome', '=', $nome)->where('senha', '=', $senha)->first();

        if(@$usuario->id != null) {
            @session_start();
            $_SESSION['id']       = $usuario->id;
            $_SESSION['nome']     = $usuario->nome;
            $_SESSION['senha']    = $usuario->cartao;
            $_SESSION['email']    = $usuario->unidade;

            if($_SESSION['nome'] != null) {
                //$showpalestras = video::all(); //para mostrar todos
                $showpalestras = video::paginate(6); //para paginar
                return view ('painel_admin.dashboard_admin', ['showpalestras' => $showpalestras]);
            }

        } else {
            // echo "<script language='javascript'> window.alert('Dados Incorretos!')</script>";
            // return view('/cadastro');
            return redirect('/admin?nome='.$nome)->with('msg', 'Dados incorretos!!!');
        }

    } //Fim da function Dashboard/Login


    //=================================================================
    // Funcao para efetuar o logout
    //=================================================================
    public function logout() {
        @session_start();
        @session_destroy();
        return view('painel_admin.index_admin');
    } //Fim da function Logout



    //=================================================================
    // Funcao para mostrar todas as Palestra
    //=================================================================
    public function show() {

        //$showpalestras = video::all(); //para mostrar todos

        $showpalestras = video::paginate(6); //para paginar

        return view ('painel_admin.dashboard_admin', ['showpalestras' => $showpalestras]);

    }

    public function create(){
        return view ('painel_admin.create_admin');
    }

    public function editar(){
        return view ('painel_admin.edit_admin');
    }



    //=================================================================
    // Funcao para confirmar Palestra
    //=================================================================
    public function store(Request $request) {

        $titulo = $request->titulo;

        $cadpalestra = new video; //nome da model da tabela video

        $cadpalestra->titulo            = $request->titulo;
        $cadpalestra->duracao           = $request->duracao;
        $cadpalestra->caminho_video     = $request->caminho_video;
        $cadpalestra->data_liberacao    = $request->data_liberacao;

        $cadpalestra->save();

        return redirect('/admin/dashboard')->with('msg', 'Palestra '.$titulo.' cadastrada com sucesso!!!');

    } //Fim da function salvar




    //=================================================================
    // Funcao para Editar Palestra
    //=================================================================
    public function edit($id) {

        $editpalestra = video::findOrFail($id);

        return view('painel_admin.edit_admin', ['editpalestra' => $editpalestra]);


    }

    //=================================================================
    // Funcao para Salvar Edit da Palestra
    //=================================================================
    public function update(Request $request) {

        $data = $request->all();

        // Video Upload
        if($request->hasFile('nome_video') && $request->file('nome_video')->isValid()) {

            $requestVideo = $request->nome_video;

            $extension = $requestVideo->extension();

            $videoName = md5($requestVideo->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestVideo->move(public_path('video'), $videoName);

            //Storage::putFile('public', $requestVideo);

            $data['nome_video'] = $videoName;

        }
        echo "<pre>";
        var_dump($data);
        echo "</pre>";

        video::findOrFail($request->id)->update($data);
        //video::findOrFail($request->id)->update($request->all());

        return redirect('/admin/dashboard')->with('msg', 'Palestra editada com sucesso!!!');


    }



    //=================================================================
    // Funcao para deletrar uma Palestra
    //=================================================================
    public function destroy($id) {

        video::findOrFail($id)->delete(); //para deletar

        return redirect('/admin/dashboard')->with('msg', 'Palestra excluída com sucesso!!!');
    }



}
