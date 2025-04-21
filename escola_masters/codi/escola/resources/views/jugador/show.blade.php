<div class="container">
    <h1>Detalls del Jugador: {{ $jugador->nom }}</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Equip:</strong> {{ $jugador->equip }}</p>
            <p><strong>Posició:</strong> {{ $jugador->posicio }}</p>
            <p><strong>Gols:</strong> {{ $jugador->gols }}</p>
        </div>
    </div>

    <div class="card-body">
        <a href="{{ route('jugador.index') }}" class="btn btn-secondary">Tornar</a>
        <a href="{{ route('pdf.jugador', $jugador) }}" class="btn btn-danger">Descargar PDF</a>
    </div>
</div>