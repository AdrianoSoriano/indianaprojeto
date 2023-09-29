<?php

namespace App\Http\Controllers;

use App\Models\AddGames;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class AddGamesController extends Controller
{
    public function index(){

        return view('app.addgame.index');
    }

    public function cadastrar(Request $request){

        if ($request->input('_token') != ''){
            $regras = [
                'title' => 'required|min:3|max:40',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'description' => 'required|max:1000',
                'play_link' => 'required',
                'tags' => 'required',
                'video' => 'required',
            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'title.min' => 'O campo titulo deve ter no mínimo 3 caracteres',
                'title.max' => 'O campo titulo deve ter no máximo 1000 caracteres',
                'image.required' => 'É necessário fornecer uma imagem',
                'image.image' => 'O arquivo deve ser uma imagem',
                'image.mimes' => 'A imagem deve estar no formato jpeg, png, jpg ou gif',
                'image.max' => 'A imagem não pode ter mais de 2MB',
            ];

            $request->validate($regras, $feedback);

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $imagem = $request->file('image');
                $nomeImagem = time() . '.'. $imagem->getClientOriginalExtension();
                $caminhoImagem = $imagem->storeAs('uploads', $nomeImagem);
                
                $addgames = new AddGames();
                $addgames->title = $request->title;
                $addgames->image = $caminhoImagem;
                $addgames->description = $request->description;
                $addgames->play_link = $request->play_link;
                $addgames->tags = $request->tags;
                $addgames->icon = $caminhoImagem;
                $addgames->youtube = 'https://www.youtube.com/watch?v='. $request->video;
                $addgames->user_id = $_SESSION['id'];

                   $addgames->save();

                return redirect()->route('app.addgames')->with('success', 'Jogo cadastrado com sucesso.');
            } else {
                return redirect()->back()->with('error', 'Ocorreu um erro ao fazer o upload da imagem.');
            }
      }
    }

    public function profilegames(){
        return view('app.addgame.profileGames');
    }

    public function read(){
        $addgame = new AddGames();
        $addgame = $addgame->where('user_id' ,$_SESSION['id'])->get();

        return view('app.addgame.profileGames', ['addgame' => $addgame]);
    }

    public function all(Request $request){
        //$addGames = AddGames::paginate(8);
        
    }
}
