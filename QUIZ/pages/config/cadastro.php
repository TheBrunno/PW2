<?php
    include('conexao.php');

    session_start();
    $user = $_SESSION['user'];
    $score = $_SESSION['score'];

    if(empty($user)){
        $user = "guest";
    }

    $stmt = $pdo->prepare("INSERT INTO tbUser VALUES(null, '$user', '$score')");
    $stmt->execute();

    header('location:../../result.php');
?>