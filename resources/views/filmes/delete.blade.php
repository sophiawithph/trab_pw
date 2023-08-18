@extends('includes.base')

@section('title', 'Deletar Filme')

@section('content')
<div class="delete-movie">
    <h2 class="delete-title">Apagar Filme</h2>
    <p class="delete-text">Você está prestes a apagar o filme:</p>
    <p class="delete-movie-name">{{ $filme->name }}</p>
    <p class="delete-text">Tem certeza de que deseja fazer isso?</p>
    <form class="delete-form" action="{{ route('movies.removeForReal', $filme->id) }}" method="post">
        @csrf
        @method('delete')
        <button class="delete-button" type="submit">Apagar</button>
    </form>
</div>

<style>
    .delete-movie {
        max-width: 400px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        text-align: center;
    }

    .delete-title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .delete-text {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .delete-movie-name {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .delete-button {
        background-color: red;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .delete-button:hover {
        background-color: #d32f2f;
    }
</style>
@endsection
