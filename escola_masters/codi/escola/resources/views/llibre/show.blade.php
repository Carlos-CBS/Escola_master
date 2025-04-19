<div class="container">
    <h1>Detalls del Llibre: {{ $llibre->titol }}</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Autor:</strong> {{ $llibre->autor }}</p>
            <p><strong>ISBN:</strong> {{ $llibre->isbn }}</p>
            <p><strong>Any Publicació:</strong> {{ $llibre->any_publicacio }}</p>
        </div>
    </div>

    <a href="{{ route('llibre.index') }}" class="btn btn-secondary mt-3">Tornar</a>
</div>