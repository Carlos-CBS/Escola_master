<h1> Creando un master </h1>
{{-- 
'nom',
'hores',
'director', --}}


<form method="POST" action=" {{ route("master.store") }}">
    <input type="text" name="nom" placeholder="nombre del master">
    <input type="number" name="hores" placeholder="Número de horas">
    <input type="text" name="director" placeholder="Director del master">

</form>