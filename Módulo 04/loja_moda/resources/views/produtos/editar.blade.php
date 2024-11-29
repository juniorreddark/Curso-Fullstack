<DOCTYPE html>
<html>
    <head>
        <title>Editar Produtos</title>
    </head>
    <body>
        <h1>Editar Produto </h1>
        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf 
            @method('PUT')
            <label for="">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ $produto->nome }}">
            <label for="">Valor</label>
            <input type="number" name="preco" id="preco" value="{{ $produto->valor }}">
            <label for="">DescriÇão</label>
            <input type="text" name="descricao" id="descricao" value="{{ $produto->descricao }}"></input>
            <button type="submit">Atualizar</button>
        </form>
    </body>
</html>