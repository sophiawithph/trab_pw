@extends('includes.base')

@section('title', 'Filmes - Cadastrar')

@section('content')
<div class="movie-form">
    <h3 class="form-title">Cadastro de Filme</h3>
    <form class="form" action="{{ route('movies.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nome do Filme</label>
            <input type="text" id="name" name="name" class="input-field">
        </div>
        <div class="form-group">
            <label for="categoria">Categoria</label>
            <select id="categoria" name="categoria" class="input-field">
                <option value="acao">Ação</option>
                <option value="terror">Terror</option>
                <option value="comedia">Comédia</option>
            </select>
        </div>
        <div class="form-group">
            <label for="sinopse">Sinopse</label>
            <input type="text" id="sinopse" name="sinopse" class="input-field">
        </div>
        <div class="form-group">
            <label for="ano">Ano</label>
            <input type="number" id="ano" name="ano" class="input-field">
        </div>
        <div class="form-group">
            <label for="trailer">Link do Trailer</label>
            <input type="text" id="trailer" name="trailer" class="input-field">
        </div>
        <div class="form-group">
            <label for="image">Capa do Filme</label>
            <input type="file" id="image" name="image" class="input-field">
        </div>
        <button type="submit" class="submit-button">Cadastrar</button>
    </form>
</div>


@endsection
