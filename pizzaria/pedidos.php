<!--processamento do pedido-->
<?php include "config.php";?>
<?php
$pizza = $_POST['pizza'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$pedidos = "$pizza $endereco";

$sql2 = mysqli_query($conn, "SELECT * FROM login WHERE email='$email'");
$sql = "UPDATE login SET pedidos='$pedidos' WHERE email='$email'";

$insert = mysqli_query($conn, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='pedidos.html'>Tente Novamente</a>";
}else{
    header("location: obrigadopedido.html"); 
}
?>
