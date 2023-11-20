<?php include "config.inc.php";?>
<?php

$id = $_POST['id'];
$produto = $_POST['produto'];
$preco = $_POST['preco'];
$quantidade= $_POST['quantidade'];

$sql2 = mysqli_query($conn, "SELECT * FROM produtos WHERE id='$id'");

$sql = "UPDATE produtos SET produto='$produto', preco='$preco', quantidade='$quantidade' WHERE id=$id";

$altera = mysqli_query($conn, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=lista-produto'>Voltar</a>";
}else{
   echo "<h3>Editado com sucesso!!!</h3>
<a href='?pg=lista-produto'>Voltar</a>";
}
   ?>
   