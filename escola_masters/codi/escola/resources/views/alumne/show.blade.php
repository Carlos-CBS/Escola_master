<div class="container">
    <h1>Detalls de l'Alumne: {{ $alumne->nom }}</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Correu:</strong> {{ $alumne->correu }}</p>
            <p><strong>Adreça:</strong> {{ $alumne->adreça }}</p>
            <p><strong>Ciutat:</strong> {{ $alumne->ciutat }}</p>
            <p><strong>País:</strong> {{ $alumne->pais }}</p>
            <p><strong>Telèfon:</strong> {{ $alumne->telefon }}</p>
            <p><strong>Master:</strong> {{ $alumne->master->nom ?? 'Sense master' }}</p>
        </div>
    </div>
   
    <div class="card-body">
        <a href="{{ route('alumne.index') }}" class="btn btn-secondary">Tornar</a>
        <a href="{{ route('pdf.alumne', $alumne) }}" class="btn btn-danger">Descargar PDF</a>
    </div>
</div>