<!DOCTYPE html>
<html>
    <head>
        <title>Categorias</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <button > <a href="{{ route('publicacaos.index') }}" >Página inicial </a></button>
        <form action="{{route('categorias.store')}}" method="post">
            @csrf 
            <label for="">Nome da Categoria</label>
            <input type="text" name="nome" id="nome">
            <label for="">Descricacao da Categoria</label>
            <input type="text" name="descricao" id="descricao">
            <button type="submit">Salvar</button>
        </form>
        @if (session('success'))
            <div>{{ session('success') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome da Categoria </th>
                    <th scope="col">Descrição da categoria </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <th scope="row">{{ $categoria->id}}</th>
                        <td>{{ $categoria->nome}}</td>
                        <td>{{ $categoria->descricao}}</td>
                        <td>   
                        <a href="{{ route('categorias.edit', $categoria->id) }}">
                        <button type="button">Editar</button>
                        </a>

                        <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>