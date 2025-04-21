<div class="container">
    <h1>Detalls del Professor: {{ $professor->nom }}</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Departament:</strong> {{ $professor->departament }}</p>
            <p><strong>Email:</strong> {{ $professor->email }}</p>
            <p><strong>Telèfon:</strong> {{ $professor->telefon }}</p>
        </div>
    </div>

    <div class="card-body">
        <a href="{{ route('professor.index') }}" class="btn btn-secondary">Tornar</a>
        <a href="{{ route('pdf.professor', $professor) }}" class="btn btn-danger">Descargar PDF</a>
    </div>
</div>