<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Novo Pedido</title>
</head>

<body>
    <h1>Novo Pedido</h1>
    <form action="<?= base_url('/pedidos/store') ?>" method="post">
        <label for="cliente_id">Cliente:</label>
        <select name="cliente_id" id="cliente_id" required>
            <?php foreach ($clientes as $cliente): ?>
                <option value="<?= $cliente['id'] ?>"><?= $cliente['CPF_CNPJ'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="produto_id">Produto:</label>
        <select name="produto_id" id="produto_id" required>
            <?php foreach ($produtos as $produto): ?>
                <option value="<?= $produto['id'] ?>"><?= $produto['nome'] ?> - R$ <?= $produto['preco'] ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required>
        <br>
        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="Aberto">Aberto</option>
            <option value="Pago">Pago</option>
            <option value="Cancelado">Cancelado</option>
        </select>
        <br>
        <button type="submit">Salvar</button>
    </form>
    <br>
    <a href="/pedidos">Voltar</a>
</body>

</html>