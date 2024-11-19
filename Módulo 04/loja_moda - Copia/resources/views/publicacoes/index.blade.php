<DOCTYPE html>
<html>
    <body>

        @section('content')
            <div class="container">
                <h1>Publicações</h1>
                <a href="{{ route('publicacoes.create') }}" class="btn btn-primary mb-3">Criar Publicação</a>
                
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Título</th>
                            <th>Conteúdo</th>
                            <th>Usuário</th>
                            <th>Empresa</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($publicacoes as $publicacoe)
                            <tr>
                                <td>{{ $publicacoe->id }}</td>
                                <td>{{ $publicacoe->titulo }}</td>
                                <td>{{ \Str::limit($publicacoe->conteudo, 50) }}</td>
                                <td>{{ $publicacoe->user->name }}</td>
                                <td>{{ $publicacoe ->empresa->nome }}</td>
                                <td>
                                    <a href="{{ route('publicacoes.edit', $publicacao) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('publicacoes.destroy', $publicacao) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endsection



        @section('content')
            <div class="container">
                <h1>Criar Nova Publicação</h1>
                <form action="{{ route('publicacoes.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="conteudo">Conteúdo</label>
                        <textarea name="conteudo" id="conteudo" class="form-control" rows="5" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="user_id">Usuário</label>
                        <select name="user_id" id="user_id" class="form-control" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="empresa_id">Empresa</label>
                        <select name="empresa_id" id="empresa_id" class="form-control" required>
                            @foreach($empresas as $empresa)
                                <option value="{{ $empresa->id }}">{{ $empresa->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Salvar</button>
                </form>
            </div>
        @endsection



        @section('content')
            <div class="container">
                <h1>Editar Publicação</h1>
                <form action="{{ route('publicacoes.update', $publicacao) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <input type="text" name="titulo" id="titulo" class="form-control" value="{{ $publicacao->titulo }}" required>
                    </div>

                    <div class="form-group">
                        <label for="conteudo">Conteúdo</label>
                        <textarea name="conteudo" id="conteudo" class="form-control" rows="5" required>{{ $publicacao->conteudo }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="user_id">Usuário</label>
                        <select name="user_id" id="user_id" class="form-control" required>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}" {{ $user->id == $publicacao->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="empresa_id">Empresa</label>
                        <select name="empresa_id"></select>
    <body>
<html>



