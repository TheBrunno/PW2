<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Kufam:wght@400;500;600&family=Poppins:wght@700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/quiz.css">
    <title>Mine Quiz</title>
</head>

<body>
    <?php 
        session_start();
        $questao = $_POST["res"];
        $_SESSION["score"] = $_SESSION["score"]+$questao;
    ?>
    <div class="geral-shadow geral-shadow-top"></div>
    <header>
        <div class="logo">
            <img src="../assets/img/logo.png">
            <span class="poppins">Mine quiz</span>
        </div>
    </header>
    <main>
        <img src="../assets/img/logo.png">