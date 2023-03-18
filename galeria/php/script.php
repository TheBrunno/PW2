<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    session_start();

    if($username == 'buno' && $password == 'mengo'
    || $username == 'glassidol' && $password == 'allahbook'
    || $username == 'admin' && $password == 'admin'){
        $_SESSION['username'] = $username;
        header('location: galeria.php');
    }else{
        header('location: ../index.html');
    }
?>