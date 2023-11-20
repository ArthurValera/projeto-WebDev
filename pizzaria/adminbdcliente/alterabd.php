<!--alteração propriamente dita do cadastro-->
<!--TROCAR O NOME DO BD DE ACORDO COM O NOME DO BD DO PROJETO OFCIAL-->
<?php include "config.php";?>
<?php

$id = $_POST['id'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];


$sql2 = mysqli_query($conn, "SELECT * FROM login WHERE id='$id'");

$sql = "UPDATE login SET email='$email', login='$login', senha='$senha' WHERE id=$id";

$altera = mysqli_query($conn, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=lista'>Voltar</a>";
}else{
   echo "<h3>Editado com sucesso!!!</h3>
<a href='?pg=lista'>Voltar</a>";
}
?>
