<?php

namespace App\Http\Controllers;

use App\Models\video;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    //=================================================================
    // Funcao para mostrar todas as Palestra
    //=================================================================
    public function index() {

        //$showpalestras = video::all(); //para mostrar todos

        $showpalestras = video::paginate(3); //para paginar

        return view ('painel_admin.index_admin', ['showpalestras' => $showpalestras]);

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
    public function salvar(Request $request) {

        $titulo = $request->titulo;

        $cadpalestra = new video; //nome da model da tabela video

        $cadpalestra->titulo            = $request->titulo;
        $cadpalestra->duracao           = $request->duracao;
        //$cadpalestra->nome_video        = $request->nome_video;
        $cadpalestra->data_liberacao    = $request->data_liberacao;
        $cadpalestra->data              = now();
        //$cadpalestra->move(public_path('video'));
        //$video      = $request->video;

        // Video Upload
        if($request->hasFile('nome_video') && $request->file('nome_video')->isValid()) {

            $requestVideo = $request->nome_video;

            $extension = $requestVideo->extension();

            $videoName = md5($requestVideo->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestVideo->move(public_path('video'), $videoName);

            //Storage::putFile('public', $requestVideo);

            $cadpalestra->nome_video = $videoName;

        }

        /*if(Request::hasFile('video')){

            $file = Request::file('video');
            $filename = $file->getClientOriginalName();
            $path = public_path().'/video/';
            return $file->move($path, $filename);
        }*/


        $cadpalestra->save();

        return redirect('/admin')->with('msg', 'Palestra '.$titulo.' cadastrada com sucesso!!!');

        //} //Fim do if

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

        return redirect('/admin')->with('msg', 'Palestra editada com sucesso!!!');


    }



    //=================================================================
    // Funcao para deletrar uma Palestra
    //=================================================================
    public function destroy($id) {

        video::findOrFail($id)->delete(); //para deletar

        return redirect('/admin')->with('msg', 'Palestra excluída com sucesso!!!');
    }

















    public function storeeee(Request $request){

      $event = new Event;

      $event->title = $request->title;
      $event->date = $request->date;
      $event->city = $request->city;
      $event->private = $request->private;
      $event->description = $request->description;
      $event->items = $request->items;

      // Image Upload
      if($request->hasFile('image') && $request->file('image')->isValid()) {

         $requestImage = $request->image;

         $extension = $requestImage->extension();

         $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

         $requestImage->move(public_path('img/events'), $imageName);

         $event->image = $imageName;

      }

      $user = auth()->user();
      $event->user_id = $user->id;

      $event->save();

      return redirect('/')->with('msg', 'Evento criado com sucesso!');

   }
}
