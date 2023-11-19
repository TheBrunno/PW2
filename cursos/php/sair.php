<?php
    session_start();
    $_SESSION['email'] = null;
    $_SESSION['name'] = null;

    header('location:./../index.php');
?>