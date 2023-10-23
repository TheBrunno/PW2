<?php
    include('config/conexao.php');
    $username = $_POST['username'];
    $password = $_POST['password'];

    session_start();
    $log = False;
    $verify = $con->prepare("SELECT password FROM tbUser WHERE nameUser = '$username'");
    $verify->execute();
    $senha = $verify->fetchAll(PDO::FETCH_ASSOC);
    foreach($senha as $eco){
        if ($eco['password']==$password){
            $log = True;
        }
    }
    if($log){
        $_SESSION['username'] = $username;
        header('location:galeria.php');
    }else{
        header('location: ../index.html');
    }

    
    

    // if($username == 'buno' && $password == 'mengo'
    // || $username == 'glassidol' && $password == 'allahbook'
    // || $username == 'admin' && $password == 'admin'){
    //     $_SESSION['username'] = $username;
    //     header('location: galeria.php');
    // }else{
    //     header('location: ../index.html');
    // }
?>