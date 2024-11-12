<DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        @foreach ($produtos as $produto )
            <h1>{{ $produto->nome}}</h1>
            <p>valor{{$produto->valor}}</p>
            <p>{{}$pproduto->descricao}</p>
            @endforeach
        <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
    </body>
</html> 