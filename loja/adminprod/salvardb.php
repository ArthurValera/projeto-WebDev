<?php include "config.inc.php"; ?>
<?php

$produto = $_POST['produto'];
$precopix = $_POST['precopix'];
$precoparcelado = $_POST['precoparcelado'];

$sql = "INSERT INTO teste(produto,precopix,precoparcelado) VALUES 
( '$produto', '$precopix', '$precoparcelado')";
$insert = mysqli_query($conexao, $sql);
echo $sql;

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados";
}else{
   echo "<h3>Cadastrada com sucesso!</h3><br>";}
   