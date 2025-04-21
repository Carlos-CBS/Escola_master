<div class="container">
    <h1>Modificar Alumno</h1>

    <form action="{{ route('alumne.update', $alumne->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nombre</label>
            <input type="text" class="form-control" name="nom" id="nom" value="{{ $alumne->nom }}" required>
        </div>

        <div class="form-group">
            <label for="correu">Correo Electrónico</label>
            <input type="email" class="form-control" name="correu" id="correu" value="{{ $alumne->correu }}" required>
        </div>

        <div class="form-group">
            <label for="adreça">Dirección</label>
            <input type="text" class="form-control" name="adreça" id="adreça" value="{{ $alumne->adreça }}" required>
        </div>
        
        <div class="form-group">
            <label for="ciutat">Ciudad</label>
            <input type="text" class="form-control" name="ciutat" id="ciutat" value="{{ $alumne->ciutat }}" required>
        </div>
        
        <div class="form-group">
            <label for="pais">País</label>
            <input type="text" class="form-control" name="pais" id="pais" value="{{ $alumne->pais }}" required>
        </div>
        
        <div class="form-group">
            <label for="telefon">Teléfono</label>
            <input type="text" class="form-control" name="telefon" id="telefon" value="{{ $alumne->telefon }}" required>
        </div>

        <div class="form-group">
            <label for="master">Master</label>
            <select name="master_id" id="master_id" class="form-control" required>
                <option value="">Sense master</option>
                @foreach ($masters as $master)
                <option value="{{ $master->id }}" {{ (old('master_id', $alumne->master_id) == $master->id) ? 'selected' : '' }}>
                    {{ $master->nom }}
                </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
