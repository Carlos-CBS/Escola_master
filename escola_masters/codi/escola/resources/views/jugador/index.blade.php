<div class="container">
    <h1>Llistat de Jugadors</h1>

    <a href="{{ route('jugador.create') }}" class="btn btn-primary mb-3">Crear Jugador</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Equip</th>
                <th>Posició</th>
                <th>Gols</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jugadors as $jugador)
                <tr>
                    <td>{{ $jugador->id }}</td>
                    <td>{{ $jugador->nom }}</td>
                    <td>{{ $jugador->equip }}</td>
                    <td>{{ $jugador->posicio }}</td>
                    <td>{{ $jugador->gols }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-warning">Editar</a>
                        <form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                    <td><a href="{{ route('jugador.show', $jugador->id) }}">Detalles jugadores</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al menú principal</a>
</div>