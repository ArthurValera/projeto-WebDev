<h1>EDIÇÃO</h1>

<?php  include "config.inc.php"; ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM teste WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){

?>

<form action="?pg=alterardb" method="post">
    <div class="mb-3">
        <label>id</label>
        <input type="id" name="id" value="<?=$dados['id'];?>" class="form-control">
    </div>    
    <div class="mb-3">
        <label>Nome do produto</label>
        <input type="text" name="produto" value="<?=$dados['produto'];?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Preço do produto no Pix</label>
        <input type="text" name="precopix" value="<?=$dados['precopix'];?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Preço do produto parcelado</label>
        <input type="text" name="precoparcelado" value="<?=$dados['precoparcelado'];?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>

<?php

} 
?>

