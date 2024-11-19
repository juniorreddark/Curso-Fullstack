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

        </form>
    </body>
</html>