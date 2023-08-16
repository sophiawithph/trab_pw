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

    function create(Request $request)
    {

        $imgPath =  $request->file('image')->store('images', 'public');
        $data = ["name" => $request['name'], "sinopse" => $request['sinopse'], "ano" => $request['ano'], "trailer" => $request['trailer'], 'image' => $imgPath];

        $request->file('image')->store('images', 'public');

        Filme::create($data);
        return redirect()->route('home')->with('sucesso', 'Usuário inserido com sucesso');

    }
}
