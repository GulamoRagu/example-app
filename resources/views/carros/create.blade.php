<h1>Adicionar Carro</h1>
<form action="{{ route('carros.store') }}" method="POST">
    @csrf
    Marca: <input type="text" name="marca"><br>
    Modelo: <input type="text" name="modelo"><br>
    Ano: <input type="number" name="ano"><br>
    Preço: <input type="number" step="0.01" name="preco"><br>
    <button type="submit">Salvar</button>
</form>
<a href="{{ route('carros.index') }}">Voltar</a>
