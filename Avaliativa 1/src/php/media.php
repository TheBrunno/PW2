<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../../public/idade.html">Exercicio 1</a></li>
            <li><a href="../../public/media.html">Exercicio 2</a></li>
            <li><a href="../../public/salario.html">Exercicio 3</a></li>
        </ul>
    </nav>
    <div class="container">
        <?php
            $nome = $_POST["nome"];
            $nota1 = $_POST["nota1"];
            $nota2 = $_POST["nota2"];
            $media = ($nota1+$nota2)/2;
            echo "<h1>".$nome."</h1>";
            echo "<h2>Media: ".$media."</h2>";

            if($media>=7){
                echo "<h2>Aprovado</h2>";
            } else if($media>=5){
                echo "<h2>Recuperação</h2>";
            } else{
                echo "<h2>Reprovado</h2>";
            }
        ?>
    </div>
</body>
</html>