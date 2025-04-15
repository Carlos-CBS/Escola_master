<h1> Listado de masters </h1>

@foreach ( $masters as $master )
<ul>
    <li> {{ $master->id }} </li>
    <li> {{  $master->nom }} </li>
    <li> {{  $master->hores }} </li>
    <li> {{  $master->director }} </li>
</ul>
<br>
<p> ------------------ </p>
<br>
    
@endforeach