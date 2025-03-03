<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <form action="<?= site_url('produtos/update/' . $produto['id']) ?>" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= $produto['nome'] ?>" required>
        <br>
        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" id="preco" value="<?= $produto['preco'] ?>" required>
        <br>
        <button type="submit">Atualizar</button>
    </form>
    <br>
    <a href="/produtos">Voltar</a>
</body>
</html>