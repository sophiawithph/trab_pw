<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('users.cadastrar');
    }

    public function cadastrar(Request $form)
    {
        $dados = $form->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $dados['password'] = Hash::make($dados['password']);

        Usuario::create($dados);
        return redirect()->route('usuarios.listAll')->with('sucesso', 'Usuário inserido com sucesso');
    }

    public function listAll()
    {
        $users = Usuario::all();
        return view('users.listAll', ['users' => $users]);
    }

    public function login(Request $request)
    {
        if ($request->isMethod("POST")) {
            $data = $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            if (Auth::attempt($data)) {
                return redirect()->route('home');
            } else {
                return redirect()->route('login')->with('erro', 'Deu Ruim!');
            }

        }

        return view('users.login');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('home');
    }

}
