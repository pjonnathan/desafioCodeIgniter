<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Pedido</title>
</head>

<body>
    <h1>Editar Pedido</h1>
    <form action="/pedidos/update/<?= $pedido['id'] ?>" method="post">
        <label for="cliente_id">Cliente:</label>
        <select name="cliente_id" id="cliente_id" required>
            <?php foreach ($clientes as $cliente): ?>
                <option value="<?= $cliente['id'] ?>" <?= ($cliente['id'] == $pedido['cliente_id']) ? 'selected' : '' ?>>
                    <?= $cliente['CPF_CNPJ'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="produto_id">Produto:</label>
        <select name="produto_id" id="produto_id" required>
            <?php foreach ($produtos as $produto): ?>
                <option value="<?= $produto['id'] ?>" <?= ($produto['id'] == $pedido['produto_id']) ? 'selected' : '' ?>>
                    <?= $produto['nome'] ?> - R$ <?= $produto['preco'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" value="<?= $pedido['quantidade'] ?>" required>
        <br>
        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="Aberto" <?= ($pedido['status'] == 'Aberto') ? 'selected' : '' ?>>Aberto</option>
            <option value="Pago" <?= ($pedido['status'] == 'Pago') ? 'selected' : '' ?>>Pago</option>
            <option value="Cancelado" <?= ($pedido['status'] == 'Cancelado') ? 'selected' : '' ?>>Cancelado</option>
        </select>
        <br>
        <button type="submit">Atualizar</button>
    </form>
    <br>
    <a href="/pedidos">Voltar</a>
</body>

</html>