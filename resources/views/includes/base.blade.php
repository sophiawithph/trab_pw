<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>@yield('title')</title>
</head>

<body>

    <h1>Site lindão</h1>

    @if (Auth::user())
        Olá {{ Auth::user()->name }}
        <br>
        <a href="{{ route('logout') }}">Logout</a>
        <br>
        <a href="{{ route('movies.create') }}">Criar Filme</a>
    @else
        <a href="{{ route('login') }}">Fazer Login</a>
    @endif

    <ul>
        <li>
            <a href="{{ route('home') }}">Home</a>
        </li>

        <li>
            <a href="{{ route('movies.listAll') }}">Filmes</a>
        </li>
    </ul>
    <br>
    <hr>
    @yield('content')
</body>

</html>
