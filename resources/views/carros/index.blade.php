<h1>Lista de Carros</h1>
<a href="{{ route('carros.create') }}">Adicionar Novo Carro</a>
<ul>
@foreach($carros as $carro)
    <li>{{ $carro->marca }} {{ $carro->modelo }} ({{ $carro->ano }}) - R$ {{ $carro->preco }}
        <a href="{{ route('carros.edit', $carro->id) }}">Editar</a>
        <form action="{{ route('carros.destroy', $carro->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </li>
@endforeach
</ul>
