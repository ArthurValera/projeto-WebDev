<?php include "config.inc.php"; ?>
<?php

$produto = $_POST['produto'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];


$sql = "INSERT INTO produtos(produto,preco,quantidade) VALUES 
( '$produto', '$preco', '$quantidade')";

$insert = mysqli_query($conn, $sql);

echo @$sql;

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados";
}else{
  echo "<h3>Cadastrada com sucesso!</h3><br>";
}

?>
   