@extends('includes.base')

@section('title', 'Deletar Filme')

@section('content')
    <h2>Apagar Filme</h2>
    <p>Você está prestes a apagar {{ $filme->name }}</p>
    <p>Tem certeza de que quer fazer isso?</p>
    <form action="{{ route('movies.removeForReal', $filme->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="Apagar">
    </form>


@endsection
