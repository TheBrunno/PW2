<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['email']) && !is_null($_SESSION['email']) && isset($_SESSION['name']) && !is_null($_SESSION['name'])){
            header('location:./php/galeria.php');
        }
    ?>
    <div class="wrapper">
        <div class="container">
            <div class="left">
                <h1>Entre com seu email e senha</h1>
                <p>Para acessar sua conta, insira seu email e sua senha.</p>
            </div>
            <form action="./php/script.php" method="post">
                <div class="loc">
                    <input type="text" id="email" required name="email" onchange="checkField(this)" >
                    <label for="email">Email</label>
                    <div class="bar"></div>
                </div>
                <div class="loc">
                    <input type="password" id="password" required name="password" onchange="checkField(this)">
                    <label for="password">Password</label>
                    <div class="bar"></div>
                    <span class="material-symbols-outlined icon">
                        visibility
                    </span>
                </div>
                <button>Entrar</button>
                <p class="forgot">Não tem uma conta? <a href="signup.php">crie uma agora mesmo!</a></p> 
            </form>
            <div class="c"></div>
        </div>
    </div>
    <script src="js/icon.js"></script>
    <script src="js/select.js"></script>
</body>
</html>