<div class="container">
    <h1>Llistat de Llibres</h1>

    <a href="{{ route('llibre.create') }}" class="btn btn-primary mb-3">Crear Llibre</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Títol</th>
                <th>Autor</th>
                <th>ISBN</th>
                <th>Any Publicació</th>
                <th>Accions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($llibres as $llibre)
                <tr>
                    <td>{{ $llibre->id }}</td>
                    <td>{{ $llibre->titol }}</td>
                    <td>{{ $llibre->autor }}</td>
                    <td>{{ $llibre->isbn }}</td>
                    <td>{{ $llibre->any_publicacio }}</td>
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