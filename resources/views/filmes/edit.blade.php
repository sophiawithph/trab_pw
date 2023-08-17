@extends('includes.base')

@section('title', 'Filmes - Alterar')


@section('content')
    <h3>Alteração de Filme</h3>
    <form action="{{ url()->current() }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Nome do Filme</label>
        <input type="text" name="name" value="{{ $filme->name }}">
        <br>
        <label for="categoria">Categoria</label>
        <select id="categoria" name="categoria">
            <option value="acao">Ação</option>
            <option value="terror">Terror</option>
            <option value="comedia">Comédia</option>
        </select>
        <br>
        <label for="sinopse" >Sinopse</label>
        <input type="text" value="{{ $filme->sinopse }}" name="sinopse">
        <br>
        <label for="ano">Ano</label>
        <input type="number" value="{{ $filme->ano }}" name="ano">
        <br>
        <label for="trailer">link do trailer</label>
        <input type="text" value="{{ $filme->trailer }}" name="trailer">
        <br>
        <label for="image">Capa do Filme</label>
        <input type="file"  name="image">
        <button type="submit">Alterar</button>
    </form>
@endsection
