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
        return redirect()->route('movies.listAll')->with('sucesso', 'Usuário inserido com sucesso');

    }

    function listMovie($id){
        $filme = Filme::find($id);
        return view('filmes/view', ["filme" => $filme]);
    }

    function edit($id){
        $filme = Filme::find($id);
        return view('filmes/edit', ["filme" => $filme]);
    }

    function editSave(Request $request, Filme $filme){
        $imgPath =  $request->file('image')->store('images', 'public');
        $filme->fill(["name" => $request['name'], "sinopse" => $request['sinopse'], "ano" => $request['ano'], "trailer" => $request['trailer'], 'image' => $imgPath, 'categoria' => $request['categoria']]);
        $request->file('image')->store('images', 'public');
        $filme->save();

        return redirect()->route('movies.listAll')->with('sucesso', 'Filme alterado com sucesso');
    }

    public function remove($id)
    {
        $filme = Filme::find($id);

        return view('filmes.delete', [
            'filme' => $filme,
        ]);
    }

    public function removeForReal($id)
    {
        $filme = Filme::find($id);
        $filme->delete();

        return redirect()->route('movies.listAll')->with('sucesso', 'Filme apagado com sucesso');
    }

    public function filter(Request $request){
        $filtroAno = $request->input('filtro_ano');
        $filtroCategoria = $request->input('filtro_categoria');

        $query = Filme::query();

        if ($filtroAno) {
            $query->where('ano', $filtroAno);
        }

        if ($filtroCategoria) {
            $query->where('categoria', $filtroCategoria);
        }

        $movies = $query->get();

        return view('filmes/filter', ["movies" => $movies]);
    }
}
