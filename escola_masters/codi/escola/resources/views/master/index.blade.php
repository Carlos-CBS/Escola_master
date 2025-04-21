<h1> Listado de masters </h1>

@foreach ( $masters as $master )
<ul>
    <li> {{  $master->nom }} </li>
    <li>
    <form method="GET" action="{{  route('master.data', $master) }}">
        <button type="submit"> Ver master </button>
    </form>

    <form method="POST" action="{{ route('master.destroy', $master) }}">
        @csrf
        @method('DELETE')
        <button type="submit"> Eliminar </button>
        </form>

    
    <form method="GET" action=" {{  route('pdf.taula1', $master) }}">
        <button type="submit"> Generar pdf del master </button>
    </form>


    <form method="GET" action=" {{  route('master.edit', $master) }}">
        <button type="submit"> Modificar master </button>
    </form>
    </li>
</ul>
<br>
<p> ------------------ </p>
<br>
@endforeach
<a href="{{ route('dashboard') }}" class="btn btn-primary">Volver al menú principal</a>