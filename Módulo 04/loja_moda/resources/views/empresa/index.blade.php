<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Empresas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
       

        <h1> Empresas </h1>

        <body>
        <form action="{{ route('empresas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-sm">
                    <label for="">RAZÃO SOCIAL</label>
                    <input type="text" name="razao_social" id="razao_social">
                    <label for="">CNPJ</label>
                    <input type="text" name="cnpj" id="cnpj">
                    <label for="">ENDEREÇO</label>
                    <input type="text" name="endereco" id="endereco">
                    <label for="">NUMERO</label>
                
                    <input type="string" name="numero" id="numero">
                </div>
                <div class="col-sm">
                    <label for="">TELEFONE</label>
                    <input type="text" name="telefone" id="telefone">
                    <label for="">Rede Social</label>
                    <input type="text" name="rede_social" id="rede_social">
                    <label for="">Produto:</label>
                    <select name="produto_id">
                        @foreach ($produtos as $produto)
                            <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                        @endforeach
                    </select>
                    <label for="">Categoria:</label>
                    <select name="categoria_id">
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                        @endforeach
                    </select>
                    <div>
                        <label for="logo">Logo</label>
                        <input type="file" name="logo" id="logo">
                    </div>
                    
                
                    <button type="submit">Salvar</button>
                </div> 
        </form>
            @if (session('success'))
                <div>{{ session('success') }}</div>

            @endif
        
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"> ID</th>
                        <th scope="col">RAZÃO SOCIAL</th>
                        <th scope="col"> CNPJ</th>
                        <th scope="col">ENDEREÇO</th>
                        <th scope="col">NÚMERO</th>
                        <th scope="col">TELEFONE</th>
                        <th scope="col">Logo</th>
                    </tr>
                </thead>
              
         
                <tbody>
                    @foreach ($empresas as $empresa)
                        <tr>
                            <th scope="row">{{ $empresa->id }}</th>
                            <td>{{ $empresa->razao_social }}</td>
                            <td>{{ $empresa->cnpj }}</td>
                            <td>{{ $empresa->endereco }}</td>
                            <td>{{ $empresa->numero }}</td>
                            <td>{{ $empresa->telefone }}</td>
                            <td>
                                @if ($empresa->logo)
                                    <img src="{{ asset('storage/'.$empresa->logo) }}" alt="foto da empresa" width="50px">
                                @else
                                    sem foto
                                @endif
                            </td>


                            <td>
                                <button>
                                    <a href="{{ route('empresas.edit', $empresa->id) }}">
                                            
                                    </a>
                                </button>

                                <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                            <img src="https://img.icons8.com/?size=100&id=e6TWwmmzpzFh&format=png&color=000000" height="35" width="35">excluir
                                    </button>
                                </form>
                            </td>

                            </th>
                        </tr>

                    @endforeach
                </tbody>
            </table>

        </body>
    </body>
</html>
