<div class="container">
    <h1>Crear Alumno</h1>

    <form action="{{ route('alumne.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nom">Nombre</label>
            <input type="text" class="form-control" name="nom" id="nom" required>
        </div>

        <div class="form-group">
            <label for="correu">Correo Electrónico</label>
            <input type="email" class="form-control" name="correu" id="correu" required>
        </div>

        <div class="form-group">
            <label for="adreça">Dirección</label>
            <input type="text" class="form-control" name="adreça" id="adreça" required>
        </div>

        <div class="form-group">
            <label for="ciutat">Ciudad</label>
            <input type="text" class="form-control" name="ciutat" id="ciutat" required>
        </div>

        <div class="form-group">
            <label for="pais">País</label>
            <input type="text" class="form-control" name="pais" id="pais" required>
        </div>

        <div class="form-group">
            <label for="telefon">Teléfono</label>
            <input type="text" class="form-control" name="telefon" id="telefon" required>
        </div>

        <div class="form-group">
            <label for="master">Master</label>
            <select name="master" id="master" class="form-control" required>
                <option value="">Seleccionar un Master</option>
                @foreach ($masters as $master)
                    <option value="{{ $master->id }}">{{ $master->nom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear Alumno</button>
    </form>
</div>
