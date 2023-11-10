<?php include "config.inc.php";?>
<?php

$id = $_POST['id'];
$produto = $_POST['produto'];
$precopix = $_POST['precopix'];
$precoparcelado= $_POST['precoparcelado'];

$sql2 = mysqli_query($conexao, "SELECT * FROM teste WHERE id='$id'");

$sql = "UPDATE teste SET produto='$produto', precopix='$precopix', precoparcelado='$precoparcelado' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listar'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>";}
   ?>
   