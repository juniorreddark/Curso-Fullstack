<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Produtos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        

        <h1>Pubicações</h1>
        <form action="{{ route('publicacaos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Produto</label>
            <select name="produto_id" id="produto_id">
                @foreach ($produtos as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome.' valor: '.$produto->preco }}</option>
                @endforeach
            </select>

            <label for="">Produto</label>
            <select name="produto_id" id="produto_id">
                @foreach ($produtos as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->preco }}</option>
                @endforeach
            </select>

            <label for="">Empresa</label>
            <select name="empresa_id" id="empresa_id">
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->razao_social }}</option>
                @endforeach
            </select>

         

            <label for="">Categoria</label>
            <select name="categoria_id" id="categoria_id">
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>

            <label for="">titulo</label>
            <input type="text" name="titulo" id="titulo">
            <div>
                <label for="conteudo">Conteúdo:</label>
                <textarea name="conteudo" id="conteudo" required></textarea>
            </div>
            
            
            <button type="submit">Salvar</button>

            @if (session('success'))
                <div>{{ session('success') }}</div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">categoria</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Conteudo</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($publicacoes as $publicacoe)
                        <tr>
                            <th scope="row">{{ $publicacoe->id }}</th>
                            <td>{{ $publicacoe->produto ? $publicacoe->produto->nome :'N/A' }}</td>
                            <td>{{ $publicacoe->produto ? $publicacoe->produto->preco :'N/A' }}</td>
                            
                            
                            <td>{{ $publicacoe->empresa ? $publicacoe->empresa->razao_social : 'N/A' }}</td>
                            <td>{{ $publicacoe->categoria ? $publicacoe->categoria->nome: 'N/A' }}</td>
                            <td>{{ $publicacoe->titulo}}</td>
                            <td>{{ $publicacoe->conteudo }}</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </form>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>