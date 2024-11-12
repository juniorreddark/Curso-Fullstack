<DOCTYPE html>
<html>
    <head>
        <title> Editar Categoria </title>
    </head>
    <body>
        <h1>Editar Categoria </h1>
        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
            @csrf 
            @method('PUT')
            <label for="">TIPO</label>
            <input type="text" name="nome" id="nome" value="{{ $categoria->nome }}">
            <label for=""> Descrição da Categoria </label>
            <input type="text" name="descricao" id="descricao" value="{{ $categoria->descricao }}">
            <button type="submit">Atualizar</button>
        </form>
    </body>
</html>