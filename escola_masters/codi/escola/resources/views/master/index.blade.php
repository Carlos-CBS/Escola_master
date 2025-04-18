<h1> Listado de masters </h1>

@foreach ( $masters as $master )
<ul>
    <li> {{  $master->nom }} </li>
    <form method="GET" action="{{  route('master.data', $master) }}">
        <button type="submit"> Ver master </button>
    </form>

    <form method="POST" action="{{ route('master.destroy', $master) }}">
        @csrf
        @method('DELETE')
        <button type="submit"> Eliminar </button>
        </form>
</ul>
<br>
<p> ------------------ </p>
<br>
    
@endforeach