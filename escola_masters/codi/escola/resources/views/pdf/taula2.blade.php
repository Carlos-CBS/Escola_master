<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos en PDF</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7fc; }
        .card-header { background-color: #007bff; color: white; }
        table th, table td { text-align: center; }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">{{ $title }}</h1>
    
    <div class="card mb-4">
        <div class="card-header"><strong>Fecha</strong></div>
        <div class="card-body"><p class="text-center">{{ $date }}</p></div>
    </div>

    <div class="card">
        <div class="card-header"><strong>Detalles</strong></div>
        <div class="card-body">
            {{-- Contenido dinámico según la entidad --}}
            @if(isset($alumne))
                @include('pdf.partials.alumne')
            @elseif(isset($llibre))
                @include('pdf.partials.llibre')
            @elseif(isset($professor))
                @include('pdf.partials.professor')
            @elseif(isset($jugador))
                @include('pdf.partials.jugador')
            @endif
        </div>
    </div>
</div>
</body>
</html>