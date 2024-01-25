<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>

        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
