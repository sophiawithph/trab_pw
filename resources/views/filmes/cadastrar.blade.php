@extends('includes.base')

@section('title', 'Filmes - Cadastrar')


@section('content')
    <h3>Cadastro de Filme</h3>
    <form action="{{ route('movies.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Nome do Filme</label>
        <input type="text" name="name">
        <br>
        <label for="sinopse">Sinopse</label>
        <input type="text" name="sinopse">
        <br>
        <label for="ano">Ano</label>
        <input type="number" name="ano">
        <br>
        <label for="trailer">link do trailer</label>
        <input type="text" name="trailer">
        <br>
        <label for="image">Capa do Filme</label>
        <input type="file" name="image">
        <button type="submit">Cadastrar</button>
    </form>
@endsection
