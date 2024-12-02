<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>Lista de Produtos</title>
    </head>
    <body>
        <button > <a href="{{ route('publicacaos.index') }}" >Página inicial </a></button>
        <h1>Produto</h1>
    
        <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
    
            @csrf
            <label for="">NOME: </label>
            <input type="text" name="nome" id="nome">
            <label for="">VALOR</label>
            <input type="numeric" name="preco" id="preco">
            <label for="">DESCRIÇÃO</label>
            <input type="text" name="descricao" id="descricao">
            <label for="">CATEGORIA</label>
            <select name="categoria_id">
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
            <div>
                <label for="foto">Foto do Produto</label>
                <input type="file" name="foto" id="foto">
            </div>
            <button type="submit">Salvar</button>
        </form>
        <!--<a href="{{ route('produtos.create') }}">Cadastrar Produtos</a>-->
        @if (@session('success'))
            <div>{{ session('sucess') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">VALOR</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">FOTOS</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto )
                    <tr>
                        <th scope="row">{{ $produto->id }}</th>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>
                            @if ($produto->foto)
                                <img src="{{ asset('storage/'.$produto->foto) }}" alt="foto do produto" width="50px">
                            @else
                                sem foto
                            @endif
                        </td>
                            
                        <td>
                            <button><a href="{{ route('produtos.edit', $produto->id) }}">Editar</a></button>
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline">
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


