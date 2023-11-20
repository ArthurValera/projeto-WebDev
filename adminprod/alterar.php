<h1>EDIÇÃO</h1>

<?php  include "config.inc.php"; ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id = $id";
$busca = mysqli_query($conn, $sql);

while($dados=mysqli_fetch_array($busca)){

?>

<form action="?pg=alterardb" enctype="multipart/form-data" method="post">
    <div class="mb-3">
        <label>id</label>
        <input type="id" name="id" value="<?=$dados['id'];?>" class="form-control">
    </div>    
    <div class="mb-3">
        <label>Nome do produto</label>
        <input type="text" name="produto" value="<?=$dados['produto'];?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Preço do produto</label>
        <input type="text" name="preco" value="<?=$dados['preco'];?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>quantidade</label>
        <input type="text" name="quantidade" value="<?=$dados['quantidade'];?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>

<?php

} 
?>

