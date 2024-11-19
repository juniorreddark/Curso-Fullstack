<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
</head>
<body>
    <h1>Pedidos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuário</th>
                <th>Total</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->id }}</td>
                    <td>{{ $pedido->user->name }}</td>
                    <td>{{ $pedido->total }}</td>
                    <td>{{ $pedido->status }}</td>
                    <td>
                        <a href="{{ route('pedidos.show', $pedido->id) }}">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>