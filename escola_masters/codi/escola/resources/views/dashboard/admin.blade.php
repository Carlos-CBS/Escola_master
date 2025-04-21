<h1>Bienvenido, {{ $user->name }}</h1>
<h2> {{ $user->role }} </h2>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Cerrar sesión</button>
</form>

<a href="{{ route('users.index') }}"> Mostrando clientes</a>
<a href="{{ route('users.create') }}">Crear un usuario</a>
<br><br>
<a href="{{ route("master.create") }}">Crear un master</a>
<a href="{{ route("master.index") }}">Listado de masters</a>
<br><br>
<a href="{{ route('alumne.create') }}" class="btn btn-success">Crear un alumno</a>
<a href="{{ route('alumne.index') }}" class="btn btn-success">Listado de alumnos</a> 

<br><br>
<a href="{{ route('llibre.create') }}" class="btn btn-success">Crear un Libro</a>
<a href="{{ route('llibre.index') }}" class="btn btn-success">Listado de Libros</a> 

<br><br>
<a href="{{ route('professor.create') }}" class="btn btn-success">Crear un Professor</a>
<a href="{{ route('professor.index') }}" class="btn btn-success">Listado de professores</a> 

<br><br>
<a href="{{ route('jugador.create') }}" class="btn btn-success">Crear un Jugador</a>
<a href="{{ route('jugador.index') }}" class="btn btn-success">Listado de jugadores</a> 
