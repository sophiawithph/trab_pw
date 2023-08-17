@extends('includes.base')

@section('title', 'Filmes')

@if (session('sucesso'))
    <div>{{ session('sucesso') }}</div>
@endif

@section('content')
    <h3>Listagem de Filmes</h3>
    @foreach ($movies as $movie)
        <p>{{ $movie->name }}</p>
        <img src="{{ asset('storage/' . $movie->image) }}" alt="Movie Image">

        <a href="{{ route('movies.listMovie', [$movie->id])  }}">Ver mais</a>
        <br>
        @auth
            @if (auth()->user()->isAdmin)
                <h1>teste</h1>
            @endif
        @endauth
        <hr>
    @endforeach
@endsection
