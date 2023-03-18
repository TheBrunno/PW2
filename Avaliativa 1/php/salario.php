<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../idade.html">Exercicio 1</a></li>
            <li><a href="../media.html">Exercicio 2</a></li>
            <li><a href="../salario.html">Exercicio 3</a></li>
        </ul>
    </nav>
    <div class="container">
        <?php
            $carga = $_POST["carga"];
            echo "<h1>".$carga." Horas</h1>";
            $salario = $carga*20;
            echo "<h2>Seu salario é de R$".$salario."</h2>"
        ?>
    </div>
</body>
</html>