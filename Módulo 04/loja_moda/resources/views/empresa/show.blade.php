<DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        @foreach ($empresas as $empresa)
            <h1>{{ $empresa->razao_social }}</h1>
            <p>Valor{{ $empresa->cnpj }}</p>
            <p>{{ $empresa->endereco }}</p>
            <p>{{ $empresa->numero }}</p>
            <p>{{ $empresa->telefone }}</p>
            <p>{{ $empresa->cep }}</p>
        @endforeach
        <a href="{{ route('empresas.edit', $empresa->id }}">Editar</a>
    </body>
</html>