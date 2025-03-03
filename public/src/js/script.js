
$(document).ready(function() {
    // Função para adicionar nova linha de produto
    $('#addRow').on('click', function() {
        // Conta quantas linhas de produtos já existem
        var rowCount = $('#productTable tbody tr').length;

        // Cria uma nova linha com base na primeira linha existente
        var newRow = `<tr>
            <td>
                <select class="form-control" name="produtos[${rowCount}][ProdutoId]" required>
                    <option value="">Selecione um produto</option>
                    <?php foreach ($produtos as $produto): ?>
                        <option value="<?= $produto['ProdutoId'] ?>"><?= $produto['Nome'] ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
            <td>
                <input type="number" class="form-control" name="produtos[${rowCount}][quantidade]" min="1" required>
            </td>
            <td>
                <button type="button" class="btn btn-danger remove-row">Remover</button>
            </td>
        </tr>`;

        // Adiciona a nova linha à tabela
        $('#productTable tbody').append(newRow);
    });

    // Função para remover uma linha de produto
    $(document).on('click', '.remove-row', function() {
        $(this).closest('tr').remove(); // Remove a linha mais próxima do botão clicado
    });
});