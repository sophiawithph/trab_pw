@extends('includes.base')

@section('title', 'Produtos - Ver')


@section('content')
    <h3>Cadastro</h3>
    <form action="{{ route('usuarios.cadastrar') }}" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="email" name="email">
        <input type="password" name="password">
        <button type="submit">Cadastrar</button>
    </form>
@endsection
