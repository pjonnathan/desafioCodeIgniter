<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="<?= site_url('clientes/update/' . $cliente['id']) ?>" method="post">
    <label for="CPF_CNPJ">CPF e/ou CNPJ:</label>
        <input type="text" name="CPF_CNPJ" id="CPF_CNPJ" required>
        <br>
        <label for="nome">NOME e/ou RAZÃO SOCIAL:</label>
        <input type="text" name="NOME_RAZAO_SOCIAL" id="NOME_RAZAO_SOCIAL" required>
        <br>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>