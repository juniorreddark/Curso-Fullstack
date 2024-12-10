<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Empresa</title>
    </head>
    <body>
        <h1>Editar Empresa</h1>

        <form action="{{ route('empresas.update', $empresa->id) }}" method="POST" >
            @csrf 
            @method('PUT')
            
            <div class="col-sm">
                <label for="razao_social">RAZÃO SOCIAL</label>
                <input type="text" name="razao_social" id="razao_social" value="{{ $empresa->razao_social }}">
                
                <label for="cnpj">CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" value="{{ $empresa->cnpj }}">
                
                <label for="endereco">ENDEREÇO</label>
                <input type="text" name="endereco" id="endereco" value="{{ $empresa->endereco }}">
                
                <label for="numero">NUMERO</label>
                <input type="number" name="numero" id="numero" value="{{ $empresa->numero }}">
            </div>

            <div class="col-sm">
                <label for="telefone">TELEFONE</label>
                <input type="text" name="telefone" id="telefone" value="{{ $empresa->telefone }}">

                <label for="rede_social">Rede Social</label>
                <input type="text" name="rede_social" id="rede_social" value="{{ $empresa->rede_social }}">

                

                <label for="categoria_nome">Categoria</label>
                <input type="text" name="categoria_nome" id="categoria_nome" value="{{ $empresa->categoria->nome }}">


                

                

                <button type="submit">Atualizar</button>
            </div>
        </form>
    </body>
</html>
