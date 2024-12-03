<DOCTYPE html>
<html>
    <head>
        <title> Editar Empresa </title>
    </head>
    <body>
        <h1> Editar Empresa</h1>

        <form action="{{ route('empresas.update', $empresa->id) }}" method="POST">
            @csrf 
            @method('PUT')
            <label for="">RAZÃO SOCIAL</label>
            <input type="text" name="razao_social" >
            <label for="">CNPJ</label>
            <input type="text" name="cnpj" id="cnpj">
            <label for="">ENDEREÇO</label>
            <input type="text" name="endereco" id="endereco">
            <label for="">NUMERO</label>
            <input type="string" name="numero" id="numero">
            <button type="submit">Salvar</button>
            

        </form>
    </body>
</html>