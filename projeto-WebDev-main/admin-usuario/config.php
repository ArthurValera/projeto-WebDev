<!--TROCAR O NOME DO BD DE ACORDO COM O NOME DO BD DO PROJETO OFCIAL-->
<?php
    // conecta ao servidor
    $conn = mysqli_connect("localhost","root","");

    // conecta ao BD criado
    $db = mysqli_select_db($conn, "clientes");
        
?>