<?php
    include('conexao.php');
    $email = $_POST["email"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $course = $_POST["course"];

    $verify = $con->prepare("SELECT codCourse FROM tbCourse WHERE nameCourse = '$course'");
    $verify->execute();
    $courseFK = $verify->fetch(PDO::FETCH_ASSOC);
    
    $stmt = $con->prepare("INSERT INTO tbUser (codCourse, nameUser, emailUser, password) VALUES(:codCourse, :name, :email, :password)");
    $stmt->bindParam(':codCourse', $courseFK['codCourse']);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    

    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    $_SESSION['course'] = $course;

    header('location:../galeria.php');
?>
