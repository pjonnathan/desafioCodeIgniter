<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
</head>

<body>
    <h1>Clientes</h1>
    <a href="<?= base_url('clientes/create') ?>">Novo Cliente</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>CPF e/ou CNPJ</th>
            <th>NOME e/ou RAZÃO SOCIAL</th>
            <th>AÇÕES</th>
        </tr>
        <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $cliente['id'] ?></td>
                <td><?= $cliente['CPF_CNPJ'] ?></td>
                <td><?= $cliente['NOME_RAZAO_SOCIAL'] ?></td>
                <td>
                    <a href="<?= base_url('clientes/edit/' . $cliente['id']) ?>">Editar</a>
                    <a href="<?= base_url('/clientes/delete/' . $cliente['id']) ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>