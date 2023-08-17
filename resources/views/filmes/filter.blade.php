@extends('includes.base')

@section('title', 'Filmes')



@section('content')
    <h3>Listagem de Filmes</h3>
    <form action="{{ route('movies.filter') }}" method="POST">
        @csrf
        <label for="filtro_ano">Filtrar por ano:</label>
        <input type="number" id="filtro_ano" name="filtro_ano">
        <label for="filtro_categoria">Filtrar por categoria:</label>
        <select id="filtro_categoria" name="filtro_categoria">
            <option value="acao">Ação</option>
            <option value="terror">Terror</option>
            <option value="comedia">Comédia</option>
        </select>
        <button type="submit">Filtrar</button>
    </form>

    @foreach ($movies as $movie)
        <p>{{ $movie->name }}</p>
        <img src="{{ asset('storage/' . $movie->image) }}" alt="Movie Image">

        <a href="{{ route('movies.listMovie', [$movie->id]) }}">Ver mais</a>
        <br>
        @auth
            @if (auth()->user()->isAdmin)
                <a href="{{ route('movies.edit', [$movie->id]) }}">Editar</a>
                <a href="{{ route('movies.remove', [$movie->id]) }}">Remover</a>
            @endif
        @endauth
        <hr>
    @endforeach
@endsection
