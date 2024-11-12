<DOCTYPE html>
<html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="widh=device-width, initial-scale-1,0">
        </head>
        <body>
            <h1>Novo Produto</h1>
            <form action="{{ route('produtos.store) }}" method="POST">
                @csrf 
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome" value="nome">
                <label for="">Valor:</label>
                <input type="number" name="preco" id="preco" value="preco">
                <label for="">Descrição</label>
                <textarea name="descricao"></textarea>
                <button type="submit">Salvar</button>
            </form>
        </body>
</html>