<h1>Listado de Alumnos</h1>

@foreach ($alumnes as $alumne)
    <ul>
        <li><strong>Nombre:</strong> {{ $alumne->nom }}</li>
        <li><strong>Correo:</strong> {{ $alumne->correu }}</li>
        <li><strong>Master:</strong> {{ $alumne->master->nom ?? 'No asignado' }}</li>
        <li>
            <form method="GET" action="{{ route('alumne.show', $alumne) }}" style="display:inline;">
                <button type="submit">Ver alumno</button>
            </form>

            <form method="POST" action="{{ route('alumne.destroy', $alumne) }}" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Eliminar alumno?')">Eliminar</button>
            </form>

            <form method="GET" action="{{ route('alumne.edit', $alumne) }}" style="display:inline;">
                <button type="submit">Modificar alumno</button>
            </form>

            <form method="GET" action="{{ route('pdf.alumne', $alumne) }}" style="display:inline;">
                <button type="submit">Generar PDF del alumno</button>
            </form>
        </li>
    </ul>
    <p>------------------</p>
@endforeach

<a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al menú principal</a>