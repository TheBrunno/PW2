<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper galeria">
        <nav>
            <ul>
                <li>
                    <a href="galeria.php">Nossos cursos</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="sair.php">Sair da conta</a>
                </li>
            </ul>
        </nav>
        <?php
            session_start(); 
            echo "<h1 class=\"welcome\">Seja bem-vindo, ".ucfirst($_SESSION['name'])."</h1>";
            echo "<p style=\"color:gray\">".$_SESSION['course']."</p>"
        ?>
        <h2>Principais cursos:</h2>
        <div class="row-container-gal">
            <div class="imgs">
                <img src="../img/javascript.png">
                <p class="songname">Javascript</p>
                <p class="description">Frontend</p>
            </div>
            <div class="imgs">
                <img src="../img/typescript.png">
                <p class="songname">Typescript</p>
                <p class="description">Backend</p>
            </div>
            <div class="imgs">
                <img src="../img/nodejs.png">
                <p class="songname">NodeJS</p>
                <p class="description">Backend</p>
            </div>
            <div class="imgs">
                <img src="../img/mongo.png">
                <p class="songname">MongoDB</p>
                <p class="description">Database</p>
            </div>
            <div class="imgs">
                <img src="../img/mariadb.png">
                <p class="songname">MariaDB</p>
                <p class="description">Database</p>
            </div>
        </div>
        <h2>Cursos adicionais:</h2>
        <div class="row-container-gal">
            <div class="imgs">
                <img src="../img/react.png">
                <p class="songname">React</p>
                <p class="description">Frontend</p>
            </div>
            <div class="imgs">
                <img src="../img/jwt.png">
                <p class="songname">Javascript JWT</p>
                <p class="description">Backend</p>
            </div>
            <div class="imgs">
                <img src="../img/spring.png">
                <p class="songname">Spring</p>
                <p class="description">Backend</p>
            </div>
            <div class="imgs">
                <img src="../img/vue.png">
                <p class="songname">Vue</p>
                <p class="description">Frontend</p>
            </div>
            <div class="imgs">
                <img src="../img/mongoose.jpg">
                <p class="songname">Mongoose</p>
                <p class="description">Backend / Database</p>
            </div>
        </div>
        <footer>
            <ul>
                <li>
                    <a href="#">Contato</a>
                </li>
                <li>
                    <a href="#">Sobre nós</a>
                </li>
                <li>
                    <a href="#">Reclame aqui</a>
                </li>
            </ul>
            <h2>© WebSamurais.ltda</h2>
        </footer>
    </div>
</body>
</html>