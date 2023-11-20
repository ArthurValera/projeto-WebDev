<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<form action="?pg=salvardb" enctype="multipart/form-data" method="post">
<table> 
    <tr> 
        <td>Nome do produto: </td>
        <td><input name="produto" type="text"/></td>
    </tr>
    <tr> 
        <td>Imagem do produto: </td>
        <td><input name="imagem" type="file"/></td>
    </tr>
    <tr> 
        <td>Preço: </td>
        <td><input name="preco" type="text"/></td>
    </tr>
    <tr>
        <td>Estoque: </td>
        <td><input name="estoque" type="text"></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="Enviar">Cadastrar</button></td>
    </tr>
</table>
</form>
</body>
</html>