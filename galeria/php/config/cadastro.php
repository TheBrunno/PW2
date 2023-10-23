<?php
    include('conexao.php');
    $user = $_POST["username"];
    $password = $_POST["password"];
    
    $stmt = $con->prepare("INSERT INTO tbUser VALUES(null, '$user', '$password')");
    $stmt->execute();

    header('location:../../index.html');
?>
