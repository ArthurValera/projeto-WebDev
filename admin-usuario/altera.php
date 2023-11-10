<!--Formulario de envio para modificar os dados de cadastro-->
<!--TROCAR O NOME DO BD DE ACORDO COM O NOME DO BD DO PROJETO OFCIAL-->
<h1>EDIÇÃO</h1>
<?php  include "config.php"; ?>
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM cadastro WHERE id = $id";
$busca = mysqli_query($conn, $sql);

while($dados=mysqli_fetch_array($busca)){

?>

<form action="?pg=alterabd" method="post">
    <div class="mb-3">
        <label>id</label>
        <input type="id" name="id" value="<?=$dados['id'];?>" class="form-control">
    </div>    
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?=$dados['email'];?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Login</label>
        <input type="text" name="login" value="<?=$dados['login'];?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>

<?php

} 
?>