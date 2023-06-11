<?php
    include_once('dados.php');
    $nome = $_POST['nome'];
    $email =  $_POST['email']; 
    $senha = $_POST['senha'];

    $query1 = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    
    $result1 = mysqli_query($conn, $query1);

    if (!$result1) {
        die('Erro na consulta: ' . mysqli_error($conn));
    }
?>
