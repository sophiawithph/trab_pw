@extends('includes.base')

@section('title', 'Usuários')

@if (session('sucesso'))
    <div>{{ session('sucesso') }}</div>
@endif

@section('content')
    <h3>Listagem de usuários</h3>
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
        <p>{{ $user->password }}</p>
        <br>
        <hr>
    @endforeach
    <a href="{{ route('usuarios.cadastrar') }}">Criar Usuário</a>
@endsection
