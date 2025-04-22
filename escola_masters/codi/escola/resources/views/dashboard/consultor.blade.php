<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Consultor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard Consultor</a>
            <div class="ml-auto">
                <span class="navbar-text mr-3">
                    Hola, {{ $user->name }} (Consultor)
                </span>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-light">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Acceso a Tabla 1
                    </div>
                    <div class="card-body">
                        <p class="card-text">Visualización de datos de la tabla 1</p>
                        <a href="{{ route('consultor.taula1') }}" class="btn btn-primary">Ver Tabla 1</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Acceso a Tabla 2
                    </div>
                    <div class="card-body">
                        <p class="card-text">Visualización de datos de la tabla 2</p>
                        <a href="{{ route('consultor.taula2') }}" class="btn btn-primary">Ver Tabla 2</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>