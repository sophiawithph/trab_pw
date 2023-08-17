@extends('includes.base')

@section('title', 'Filme - Ver')


@section('content')
    <h2>{{ $filme->name }} </h2>
    <img src="{{ asset('storage/' . $filme->image) }}" alt="Movie Image">
    <p>{{ $filme->sinopse }}</p>
    <p>{{ $filme->ano }}</p>
    <a href="{{ $filme->trailer }}">Trailer</a>
    <p>
        <a href="{{ route('movies.listAll') }}">Voltar</a>
    </p>

@endsection
