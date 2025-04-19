<div class="container">
    <h1>Crear Professor</h1>

    <form action="{{ route('professor.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" required>
        </div>

        <div class="form-group">
            <label for="departament">Departament</label>
            <input type="text" class="form-control" name="departament" id="departament" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="telefon">Telèfon</label>
            <input type="text" class="form-control" name="telefon" id="telefon" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear Professor</button>
    </form>
</div>