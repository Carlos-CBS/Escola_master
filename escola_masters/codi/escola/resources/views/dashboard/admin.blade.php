<h1>Bienvenido, {{ $user->name }}</h1>
<h2> {{ $user->role }} </h2>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Cerrar sesión</button>
</form>

<a href="{{ route('users.index') }}"> Mostrando clientes</a>
<a href="{{ route('users.create') }}">Crear un usuario</a>