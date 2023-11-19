<!--Recebmento e efetuação do cadastro no BD-->
<?php include "config.php"; ?>
<?php

$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];


$sql = "INSERT INTO login (email, login, senha)
 VALUES ('$email', '$login', '$senha')";


echo $sql;

$insert = mysqli_query($conn, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=inserir'>Tente Novamente</a>";
}else{
    header("location: cadastroconcluido.html");
}
?>