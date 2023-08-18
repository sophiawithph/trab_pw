<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>@yield('title')</title>
</head>
 <div class="barra"> 
<body>

    <div class="header">
        <div style="color:white; padding: 10px;">
            @if (Auth::user())
            Olá {{ Auth::user()->name }}
        </div>
        <a  href="{{ route('logout') }}">Logout</a>
        <a  href="{{ route('movies.create') }}">Criar Filme</a>
        @else
        <a  href="{{ route('login') }}">Fazer Login</a>
        @endif
        <a  href="{{ route('movies.listAll') }}">Filmes</a>
        </div>
    </div>
    </div>
    <div>
        <br><br>
    @yield('content')
    </div>
</body>

</html>
