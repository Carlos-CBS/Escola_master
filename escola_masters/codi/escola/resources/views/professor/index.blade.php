<div class="container">
    <h1>Llistat de Professors</h1>

    <a href="{{ route('professor.create') }}" class="btn btn-primary mb-3">Crear Professor</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Departament</th>
                <th>Email</th>
                <th>Telèfon</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($professors as $professor)
                <tr>
                    <td>{{ $professor->id }}</td>
                    <td>{{ $professor->nom }}</td>
                    <td>{{ $professor->departament }}</td>
                    <td>{{ $professor->email }}</td>
                    <td>{{ $professor->telefon }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Editar</a>
                        <form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>