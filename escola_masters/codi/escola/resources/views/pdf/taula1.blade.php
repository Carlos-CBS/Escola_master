<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 12 Generate PDF</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7fc;
        }
        .card-header {
            background-color: #007bff;
            color: white;
        }
        table th {
            text-align: center;
        }
        table td {
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <h1 class="text-center mb-4">{{ $title }}</h1>
    
    <div class="card mb-4">
        <div class="card-header">
            <strong>Fecha</strong>
        </div>
        <div class="card-body">
            <p class="text-center">{{ $date }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <strong>Detalles</strong>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Horas</th>
                        <th>Nombre</th>
                        <th>Director</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $master->id }}</td>
                        <td>{{ $master->hores }}</td>
                        <td>{{ $master->nom }}</td>
                        <td>{{ $master->director }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
