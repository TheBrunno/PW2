<?php 
    $user = $_POST['login'];
    $password = $_POST['password'];

    if($user=='pedrinhofoda' && $password=='glassidoll'){
        header('location:../galeria.html');
    } else{
        header('location:../index.html');
    }
?>