<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="">
        <meta name="viewport">
        <title>Publicações</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <button><a href="{{ route(') }}">Página Inicial</a></button>
        <h1>Pubicações</h1>
        <form action="{{ route('publicacoes.store') }}" method="POST">
            @csrf
            <label for="">Empresa</label>
            <select name="empresa_id" id="empresa_id">
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->nome }}</option>
                @endforeach
            </select>

            <label for="">Produto</label>
            <select name="produto_id" id="produto_id">
                @foreach ($produtos as $produto)
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                @endforeach
            </select>

            <label for="">Categoria</label>
            <select name="categoria_id" id="categoria_id">
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>

        

            <label for="">VALOR:</label>
            <input type="number" name="preco" id="preco">

           

            <button type="submit">Salvar</button>

            @if (session('success'))
                <div>{{ session('success') }}</div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Categoria</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($publicacoes as $publicacoe)
                        <tr>
                            <th scope="row">{{ $publicacoe->id }}</th>
                            <td>{{ $publicacoe->servico ? $publicacoe->servico->tipo :'N/A' }}</td>
                            <td>{{ $publicacoe->cliente ? $publicacoe->cliente->nome : 'N/A' }}</td>
                            <td>{{ $publicacoe->empresa ? $publicacoe->empresa->razao_social : 'N/A' }}</td>
                            <td>{{ $publicacoe->data_inicial ? $publicacoe->data_inicial : 'Data indisponível' }}</td>
                          
                                    <button type="submit">
                                        <P>ATUALIZAR</P>
                                    </button>
                                
                            </td>

                        </tr>

                    @endforeach
                </tbody>
            </table>
        </form>

    </body>
</html>




