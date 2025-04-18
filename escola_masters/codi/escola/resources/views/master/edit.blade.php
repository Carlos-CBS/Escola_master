<div class="container">
    <h1>Modificar Master</h1>

    <form action="{{ route('master.update', $master->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nom">Nombre</label>
            <input type="text" class="form-control" name="nom" value="{{ $master->nom }}" required>
        </div>

        <div class="form-group">
            <label for="hores">Horas</label>
            <input type="number" class="form-control" name="hores" value="{{ $master->hores }}" required>
        </div>

        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" class="form-control"  name="director" value="{{ $master->director }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>