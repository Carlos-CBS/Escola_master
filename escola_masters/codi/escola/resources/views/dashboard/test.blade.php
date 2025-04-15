<h1>Vista de prueba</h1>
@if(isset($user))
    <p>Usuario: {{ $user->name }}</p>
    <p>Rol: {{ $user->role }}</p>
@else
    <p>Usuario no definido</p>
@endif