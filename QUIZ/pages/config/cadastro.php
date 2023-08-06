<?php
    include('conexao.php');

    session_start();
    $questao = $_POST["res"];
    $_SESSION["score"] = $_SESSION["score"]+$questao;
    $user = $_SESSION['user'];
    $score = $_SESSION['score'];



    if(empty($user)){
        $user = "guest";
    }

    $stmt = $pdo->prepare("INSERT INTO tbUser VALUES(null, '$user', '$score')");
    $stmt->execute();

    header('location:../../result.php');
?>
