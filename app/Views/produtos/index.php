<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
</head>

<body>
    <h1>Produtos</h1>
    <a href="<?= base_url('/produtos/create') ?>">Novo Produto</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?= $produto['id'] ?></td>
                <td><?= $produto['nome'] ?></td>
                <td>R$ <?= $produto['preco'] ?></td>
                <td>
                    <a href="<?= base_url('produtos/edit/' . $produto['id']) ?>">Editar</a>
                    <a href="<?= base_url('produtos/delete/' . $produto['id']) ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>