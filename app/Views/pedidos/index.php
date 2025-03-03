<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pedidos</title>
</head>

<body>
    <h1>Pedidos</h1>
    <a href="<?= base_url('/pedidos/create')?>">Novo Pedido</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Cliente</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Total</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($pedidos as $pedido): ?>
            <tr>
                <td><?= $pedido['id'] ?></td>
                <td><?= $pedido['cliente_id'] ?></td>
                <td><?= $pedido['produto_id'] ?></td>
                <td><?= $pedido['quantidade'] ?></td>
                <td>R$ <?= $pedido['total'] ?></td>
                <td><?= $pedido['status'] ?></td>
                <td>
                <a href="<?= base_url('pedidos/edit/' . $pedido['id']) ?>">Editar</a>
                <a href="<?= base_url('pedidos/delete/' . $pedido['id']) ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>