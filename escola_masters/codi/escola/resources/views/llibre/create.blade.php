<div class="container">
    <h1>Crear Llibre</h1>

    <form action="{{ route('llibre.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="titol">Títol</label>
            <input type="text" class="form-control" name="titol" id="titol" required>
        </div>

        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" class="form-control" name="autor" id="autor" required>
        </div>

        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" name="isbn" id="isbn" required>
        </div>

        <div class="form-group">
            <label for="any_publicacio">Any Publicació</label>
            <input type="number" class="form-control" name="any_publicacio" id="any_publicacio" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Llibre</button>
    </form>
</div>