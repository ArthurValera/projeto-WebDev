<?php
    session_start();

    if (empty($_POST) || empty($_POST['email']) || empty($_POST['senha']))  {
        header("Location: index.php");
        exit();
    }

    include('config.php');

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM login WHERE email = ? AND senha = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $senha);
    $stmt->execute();

    $res = $stmt->get_result();

    $row = $res->fetch_object();
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        $_SESSION["email"] = $email;
        header("Location: cardapio.html");
        exit();
    } else {
        echo "Login mal sucedido!";
    }

    // Fechar a declaração e a conexão
    $stmt->close();
    $conn->close();
?>
