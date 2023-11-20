<?php include "config.inc.php";?>
<?php
if(isset($_FILES['imagem'])){
    $imagem=$_FILES['imagem'];

    if($imagem['error'])
        die("falha no envio do arquivo");

    if($imagem['size']>5242880)
        die("Arquivo extrapolou o limite. Máximo:5MB");

    $pasta="imagens/";
    $nomedaimagem=$imagem['name'];
    $novoNomeDaImagem=uniqid();
    $extensao= strtolower(pathinfo($nomedaimagem,PATHINFO_EXTENSION));  

    if($extensao != 'jpg' && $extensao !='png' && $extensao != 'jpeg') 
        die("tipo de arquivo não permitido");
    $path=  $pasta . $novoNomeDaImagem . "." . $extensao;
    $deu_certo = move_uploaded_file($imagem["tmp_name"],$path);
}

$id = $_POST['id'];
$produto = $_POST['produto'];
$preco = $_POST['preco'];
$estoque= $_POST['estoque'];

if ($deu_certo) {
    
    $sql_select = mysqli_query($conexao, "SELECT path FROM produtos WHERE id='$id'");
    $row = mysqli_fetch_assoc($sql_select);
    $caminhoImagemAntiga = $row['path'];
   
    $sql = "UPDATE produtos SET produto='$produto', preco='$preco', estoque='$estoque', path='$path' WHERE id=$id";
    $altera = mysqli_query($conexao, $sql);

    if ($altera) {
        if (file_exists($caminhoImagemAntiga)) {
            unlink($caminhoImagemAntiga);
        }
        $caminhoNovaImagem = "imagens/" . basename($path);
        move_uploaded_file($imagem["tmp_name"], $caminhoNovaImagem);
        echo "<h3>Atualizado com sucesso!</h3>";
    } else {
        echo "Ocorreu um erro ao atualizar dados no banco de dados! <br>
        <a href='?pg=listar'>Voltar</a>";
    }
} else {
    echo "Algo deu errado ao enviar a imagem!!";
}
   ?>
   