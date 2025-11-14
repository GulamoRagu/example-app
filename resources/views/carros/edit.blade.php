<h1>Editar Carro</h1>
<form action="{{ route('carros.update', $carro->id) }}" method="POST">
    @csrf
    @method('PUT')
    Marca: <input type="text" name="marca" value="{{ $carro->marca }}"><br>
    Modelo: <input type="text" name="modelo" value="{{ $carro->modelo }}"><br>
    Ano: <input type="number" name="ano" value="{{ $carro->ano }}"><br>
    Preço: <input type="number" step="0.01" name="preco" value="{{ $carro->preco }}"><br>
    <button type="submit">Actualizar</button>
</form>
<a href="{{ route('carros.index') }}">Voltar</a>
