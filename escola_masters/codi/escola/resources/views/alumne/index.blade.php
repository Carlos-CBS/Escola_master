<div class="container">
    <h1>Lista de Alumnos</h1>

    <a href="{{ route('alumne.create') }}" class="btn btn-primary mb-3">Crear Alumno</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>País</th>
                <th>Teléfono</th>
                <th>Master</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnes as $alumne)
                <tr>
                    <td>{{ $alumne->id }}</td>
                    <td>{{ $alumne->nom }}</td>
                    <td>{{ $alumne->correu }}</td>
                    <td>{{ $alumne->adreça }}</td>
                    <td>{{ $alumne->ciutat }}</td>
                    <td>{{ $alumne->pais }}</td>
                    <td>{{ $alumne->telefon }}</td>
                    <td>{{ $alumne->masterObj->nom ?? 'No asignado' }}</td>
                    <td> 
                        <a href="{{ route('alumne.show', $alumne->id) }}">Detalles Alumne</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al menú principal</a>
</div>
