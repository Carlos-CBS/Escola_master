<h1>Bienvenido, Consultor</h1>
<!-- Aquí puedes poner las funcionalidades para consultores -->

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Cerrar sesión</button>
</form>