@extends('includes.base')

@section('title', 'Filmes')

@if (session('sucesso'))
<div>{{ session('sucesso') }}</div>
@endif

@section('content')
<div style="left:50%">
<div class="search">
    <h2>Listagem de Filmes</h2>
    <form action="{{ route('movies.filter') }}" method="POST">
    @csrf
    <!-- <label for="filtro_ano">Filtrar por ano:</label> -->
    <input type="number" id="filtro_ano" name="filtro_ano" placeholder="Filtrar por ano:">
    <select id="filtro_categoria" name="filtro_categoria">
        <option value="acao">Ação</option>
        <option value="terror">Terror</option>
        <option value="comedia">Comédia</option>
    </select>
    <br><br>
    <button type="submit" style="border: 1px;; color:purple; border-radius: 15px; padding: 7px">Filtrar🔎</button>
</form>
</div>
</div>
<br>
<div class="movies-gallery">
    @foreach ($movies as $movie)
    <div class="movie-item">
        <img src="{{ asset('storage/' . $movie->image) }}" alt="Movie Image">
        <p>{{ $movie->name }}</p>
        <a href="{{ route('movies.listMovie', [$movie->id]) }}">Ver mais</a>
        @auth
        @if (auth()->user()->isAdmin)
        <a href="{{ route('movies.edit', [$movie->id]) }}">Editar</a>
        <a href="{{ route('movies.remove', [$movie->id]) }}">Remover</a>
        @endif
        @endauth
    </div>
    @endforeach
</div>

@endsection
