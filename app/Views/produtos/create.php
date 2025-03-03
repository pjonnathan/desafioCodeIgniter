<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Novo Produto</title>
</head>
<body>
    <h1>Novo Produto</h1>
    <form action="<?= base_url('/produtos/store') ?> " method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br>
        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" id="preco" required>
        <br>
        <button type="submit">Salvar</button>
    </form>
    <br>
    <a href="/produtos">Voltar</a>
</body>
</html>