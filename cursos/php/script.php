<?php
    include('config/conexao.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    session_start();
    $log = False;
    $verify = $con->prepare("SELECT password, nameUser FROM tbUser WHERE emailUser = '$email'");
    $verify->execute();
    $senha = $verify->fetchAll(PDO::FETCH_ASSOC);
    foreach($senha as $eco){
        if ($eco['password']==$password){
            $log = True;

            $_SESSION['email'] = $email;
            $_SESSION['name'] = $eco['nameUser'];
        }
    }
    if($log){
        header('location:galeria.php');
    }else{
        header('location: ../index.php');
    }
?>