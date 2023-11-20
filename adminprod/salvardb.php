<?php include "config.inc.php"; ?>
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

    //if($deu_certo){
       // $sql = "INSERT INTO produtos(nome,path,) VALUES('$nomedaimagem', '$path')";
        
    //}else
    //echo"falha ao enviar o arquivo";
    
}

$produto = $_POST['produto'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];
if($deu_certo){

$sql = "INSERT INTO produtos(produto,preco,estoque,nome,path) VALUES 
( '$produto', '$preco', '$estoque','$nomedaimagem','$path')";
}
$insert = mysqli_query($conexao, $sql);
echo @$sql;

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados";
}else{
  echo "<h3>Cadastrada com sucesso!</h3><br>";
}

?>
   