<?php include "config.inc.php"; ?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['excluir_id'])) {
    // excluindo cadastro
    $excluir_id = $_POST['excluir_id'];
    $excluir_sql = "DELETE FROM cadastro WHERE id = $excluir_id";
    $excluir_result = mysqli_query($conexao, $excluir_sql);

    if ($excluir_result) {
        echo "Registro excluído com sucesso.";
    } else {
        echo "Erro ao excluir o registro.";
    }
}

$busca = "SELECT * from teste order by id";
$todos = mysqli_query($conexao, $busca);

?>
<table class="table table-hover table-striped table-bordered">
    <tr>
        <td style="width: 25px;">Id</td>
        <td style="width: 205px;">Nome do produto</td>
        <td style="width: 205px;">preço do produto</td>
        <td style="width: 205px;">Ações</td>
    </tr>
    <?php while ($dados = mysqli_fetch_array($todos)) { ?>

        <tr>
            <td><?= $dados['produto']; ?></td>
            <td><?= $dados['precopix']; ?></td>
            <td><?= $dados['precoparcelado']; ?></td>
            <td>
                <button onclick="location.href='?pg=alterar&id=<?= $dados['id']; ?>'" class='btn-success'>Editar</button>
                <form method="post">
                    <input type="hidden" name="excluir_id" value="<?= $dados['id']; ?>">
                    <button type="submit" class='btn-danger'>Excluir</button>
                </form>
            </td>
        </tr>

    <?php } ?>

</table>