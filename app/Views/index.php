<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
</head>

<body>
    <div class="container text-center mt-5">
        <h1>Bem-vindo ao Sistema</h1>
        <p>Gerencie seus clientes, produtos e pedidos de compra facilmente.</p>

        <div class="row">
            <div class="row-sm-8">
                <div class="row">
                    <div class="row-md-4">
                        <a href="<?= base_url('clientes/listar') ?>" class="btn btn-primary btn-lg w-100">Gerenciar Clientes</a>

                        <a href="<?= base_url('produtos/listar') ?>" class="btn btn-success btn-lg w-100 " >Gerenciar Produtos</a>

                        <a href="<?= base_url('pedidos/listar') ?>" class="btn btn-warning btn-lg w-100">Gerenciar Pedidos de Compra</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">Faça seu pedido</div>
        </div>

    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>