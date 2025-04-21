<p><strong>Nombre:</strong> {{ $alumne->nom }}</p>
<p><strong>Correo:</strong> {{ $alumne->correu }}</p>
<p><strong>Dirección:</strong> {{ $alumne->adreça }}</p>
<p><strong>Ciudad:</strong> {{ $alumne->ciutat }}</p>
<p><strong>País:</strong> {{ $alumne->pais }}</p>
<p><strong>Teléfono:</strong> {{ $alumne->telefon }}</p>
<p><strong>Master:</strong> {{ $alumne->master->nom ?? 'No asignado' }}</p>