@extends('includes.base')

@section('title', 'Filme - Ver')


@section('content')
<div class="container-movie">
    <div class="movie-c">
        <h2>{{ $filme->name }} </h2>
        <img src="{{ asset('storage/' . $filme->image) }}" alt="Movie Image">
        <p>{{ $filme->sinopse }}</p>
        <p>{{ $filme->ano }}</p>
        <iframe width="560" height="315" src="{{ $filme->getEmbed() }}" frameborder="0" allowfullscreen></iframe>
        <p>
            <a href="{{ route('movies.listAll') }}">Voltar</a>
        </p>
    </div>
</div>

@endsection
