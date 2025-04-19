<div class="container">
    <h1>Crear Jugador</h1>

    <form action="{{ route('jugador.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" required>
        </div>

        <div class="form-group">
            <label for="equip">Equip</label>
            <input type="text" class="form-control" name="equip" id="equip" required>
        </div>

        <div class="form-group">
            <label for="posicio">Posició</label>
            <input type="text" class="form-control" name="posicio" id="posicio" required>
        </div>

        <div class="form-group">
            <label for="gols">Gols</label>
            <input type="number" class="form-control" name="gols" id="gols" min="0" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Jugador</button>
    </form>
</div>