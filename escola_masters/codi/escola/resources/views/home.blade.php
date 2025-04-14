<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Escola Masters</title>
</head>
<body>
    <h1>🎓 Escola Masters</h1>
    <img src="{{ asset('img/logo.png') }}" alt="Logo Escola" width="150">
    <nav>
        <ul>
            <li><a href="{{ route('info') }}"> Informació</a></li>
            <li><a href="{{ route('login') }}"> Accés usuari</a></li>
        </ul>
    </nav>
</body>
</html>