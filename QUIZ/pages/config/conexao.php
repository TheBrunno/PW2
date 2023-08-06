<?php
    $hostname = 'localhost';
    $bd = 'quiz';
    $usuario = 'root';
    $senha = '';

    $pdo = new PDO('mysql:host='.$hostname.';dbname='.$bd, $usuario, $senha);
?>