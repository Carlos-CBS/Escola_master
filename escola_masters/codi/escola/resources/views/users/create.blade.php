<h1>Crear Usuario</h1>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Correo electrónico" required>
    <input type="password" name="password" placeholder="Contraseña" required>
    <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" required>
    <select name="role" required>
        <option value="Administrador">Administrador</option>
        <option value="Consultor">Consultor</option>
    </select>
    <button type="submit">Crear Usuario</button>
</form>
