<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    function index()
    {
        return view('filmes.cadastrar');
    }

    function listAll(){
        $movies = Filme::all();
        return view('filmes.listAll', ['movies' => $movies]);
    }

    function create(Request $request)
    {
        $imgPath =  $request->file('image')->store('images', 'public');
        $data = ["name" => $request['name'], "sinopse" => $request['sinopse'], "ano" => $request['ano'], "trailer" => $request['trailer'], 'image' => $imgPath, 'categoria' => $request['categoria']];

        $request->file('image')->store('images', 'public');

        Filme::create($data);
        return redirect()->route('home')->with('sucesso', 'Usuário inserido com sucesso');

    }

    function listMovie($id){
        $filme = Filme::find($id);
        return view('filmes/view', ["filme" => $filme]);
    }
}
