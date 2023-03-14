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
            $idade = $_POST["idade"];
            echo "<h1>".$nome."</h1>";
            if($idade>=18){
                echo "<h2>Você é maior de idade</h2>";
            } else{
                echo "<h2>Você é menor de idade</h2>";
            }
        ?>
    </div>
</body>
</html>