<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form method="POST" action="{{ url('/register') }}">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required>

        <label for="password_confirmation">Confirmar contraseña:</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
