<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class CadastroUsuarioController extends Controller
{
    public function index(Request $request)
    {
        $erro = '';

        if ($request->get('erro') == 1) {
            $erro = 'Senhas não confere';
        }

        return view('site.cadastro', ['erro' => $erro]);
    }

    public function cadastrar(Request $request)
    {
        if ($request->input('_token') != '') {
            $regras = [
                'name' => 'required|min:3|max:40',
                'email' => 'email',
                'password' => 'required|min:6',
            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'name.min' => 'O campo nome deve ter no mínimo 3 caracteres',
                'name.max' => 'O campo nome deve ter no máximo 40 caracteres',
                'email.email' => 'O campo e-mail não foi preenchido corretamente',
                'password.required' => 'O campo :attribute deve ser preenchido',
                'password.min' => 'O campo senha deve ter no mínimo 6 caracteres',
            ];

            $request->validate($regras, $feedback);

            if ($request->password != $request->password_confirmation) {
                return redirect()->route('site.cadastro', ['erro' => 1]);
            } else {
                $use = new User();
                $use->create($request->all());
            }
        }
        return redirect()->route('site.cadastro')->with('success', 'O cadastro foi realizada com sucesso.');
    }

    public function profile()
    {

        $id = $_SESSION['id'];
        $user = User::find($id);

        return view('app.profile', ['user' => $user]);
    }

    public function editar(Request $request)
    {

        if ($request->input('_token') != '') {
            $regras = [
                'name' => 'required|min:3|max:40',
                'email' => 'email',
            ];

            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido',
                'name.min' => 'O campo nome deve ter no mínimo 3 caracteres',
                'name.max' => 'O campo nome deve ter no máximo 40 caracteres',
                'email.email' => 'O campo e-mail não foi preenchido corretamente',
            ];

            $request->validate($regras, $feedback);

            $use = User::find($_SESSION['id']);
            $use->name = $request->input('name');
            $use->email = $request->input('email');
            $use->save();

            return redirect()->route('app.profile')->with('success', 'Perfil foi alterado com sucesso.');
        }
    }
}
