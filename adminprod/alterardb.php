<?php include "config.inc.php";?>
<?php

$id = $_POST['id'];
$produto = $_POST['produto'];
$preco = $_POST['preco'];
$estoque= $_POST['estoque'];

$sql2 = mysqli_query($conexao, "SELECT * FROM produtos WHERE id='$id'");

$sql = "UPDATE produtos SET produto='$produto', preco='$preco', estoque='$estoque' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listar'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>";}
   ?>
   