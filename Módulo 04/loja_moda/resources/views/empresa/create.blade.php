<DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1> Nova Empresa </h1>
        <form action="{{ route('empresa.store') }}" method="POST">
            @csrf 
            <label for="">RAZÃO SOCIAL</label>
            <input type="text" name="razao_social">
            <label for="">CNPJ</label>
            <input type="string" name="cnpj">
            <label for="">ENDEREÇO</label>
            <input type="text" name="endereco">
            <label for="">Número</label>
            <input type="string" name="numero">
            <label for="">TELEFONE</label>
            <input type="string" name="telefone">
            <label for="">CEP</label>
            <input type="string" name="cep">
            <button type="submit">Salvar</button>
        </form>
    </body>
</html>