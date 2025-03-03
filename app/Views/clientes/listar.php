<div class="modal fade" id="modal-novo-cliente">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="cadastrar" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Novo Cliente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="">CPF e/ou CNPJ</label>
                                <input type="text" class="form-control" name="CPF_CNPJ" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nome e/ou Razão Social</label>
                                <input type="text" class="form-control" name="NOME_RAZAO_SOCIAL" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-editar-cliente">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form action="editar" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Editar Cliente</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">CPF e/ou CNPJ</label>
                                <input type="text" class="form-control" id="modal-editar-cliente-CPF_CNPJ" name="CPF_CNPJ">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="">Nome e/ou Razão Social</label>
                                <input type="text" class="form-control" id="modal-editar-cliente-NOME_RAZAO_SOCIAL" name="NOME_RAZAO_SOCIAL">
                            </div>
                        </div>

                        <input type="hidden" id="modal-editar-cliente-ClienteId" name="ClienteId">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Clientes</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-novo-cliente">
                                <i class="fas fa-plus-circle"></i> Novo Cliente
                            </button>
                        </div>
                    </div>
                </div>
                <?php if (isset($_GET['alert']) && $_GET['alert'] == "successCreate") :
                ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
                                Cliente cadastrado com sucesso!
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (isset($_GET['alert']) && $_GET['alert'] == "successDelete") :
                ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
                                Cliente excluido com sucesso!
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (isset($_GET['alert']) && $_GET['alert'] == "successUpdate") :
                ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
                                Cliente atualizado com sucesso!
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>COD.:</th>
                            <th>CPJ e/ou CNPJ</th>
                            <th>NOME e/ou Razão Social</th>
                            <th>AÇÕES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($clientes as $cli): ?>
                            <tr>
                                <td><?= $cli['ClienteId'] ?></td>
                                <td><?= $cli['CPF_CNPJ'] ?></td>
                                <td><?= $cli['NOME_RAZAO_SOCIAL'] ?></td>
                                <td>
                                    <form action="excluir/<?= $cli['ClienteId'] ?>" method="post" style="display:inline;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>

                                    <button type="button" class="btn btn-warning" onclick="prepararDados(<?= $cli['ClienteId'] ?>, '<?= $cli['CPF_CNPJ'] ?>', '<?= $cli['NOME_RAZAO_SOCIAL']  ?>')"><i class="fas fa-edit"></i></button>
                                </td>
                            </tr>

                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
    function prepararDados(ClienteId, CPF_CNPJ, NOME_RAZAO_SOCIAL) {
        document.getElementById('modal-editar-cliente-ClienteId').value = ClienteId;
        document.getElementById('modal-editar-cliente-CPF_CNPJ').value = CPF_CNPJ;
        document.getElementById('modal-editar-cliente-NOME_RAZAO_SOCIAL').value = NOME_RAZAO_SOCIAL;

        $('#modal-editar-cliente').modal('show');
    }
</script>