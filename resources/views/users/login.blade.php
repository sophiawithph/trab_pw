<div style="border: 1px solid peru; width: 50%; margin: 0 auto; text-align: center;">
   @if (session('erro'))
    <div>{{ session('erro') }}</div>
   @endif

    <h1>Login</h1>
    <form action="{{ url()->current() }}" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email">
        <br><br>
        <label for="Password">Password:</label>
        <input type="password" name="password">
        <br><br>
        <button type="submit">Logar</button>
    </form>
</div>
