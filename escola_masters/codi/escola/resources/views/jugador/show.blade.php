<div class="container">
    <h1>Detalls del Jugador: {{ $jugador->nom }}</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Equip:</strong> {{ $jugador->equip }}</p>
            <p><strong>Posició:</strong> {{ $jugador->posicio }}</p>
            <p><strong>Gols:</strong> {{ $jugador->gols }}</p>
        </div>
    </div>

    <a href="{{ route('jugador.index') }}" class="btn btn-secondary mt-3">Tornar</a>
</div>