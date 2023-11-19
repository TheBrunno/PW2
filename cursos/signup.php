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
                <h1>Mas antes, crie sua conta</h1>
                <p>Para usar esse site, primeiro crie sua conta usando seu nome, email e senha.</p>
            </div>
            <form action="./php/config/cadastro.php" method="post">
                <div class="loc">
                    <input type="text" id="name" required name="name" onchange="checkField(this)">
                    <label for="name">Nome</label>
                    <div class="bar"></div>
                </div>
                <div class="loc">
                    <select id="course" onchange="checkSelection()" name="course">
                        <option disabled selected value="null"></option>

                        <?php
                            include('php/config/conexao.php');
                            $verify = $con->prepare("SELECT nameCourse FROM tbCourse");
                            $verify->execute();
                            $courses = $verify->fetchAll(PDO::FETCH_ASSOC);
                            foreach($courses as $course){
                                echo '<option value="' . $course["nameCourse"] . '">' . $course["nameCourse"] . '</option>';
                            }

                        ?>
                    </select>
                    <label for="course">Curso</label>
                    <div class="bar"></div>
                </div>
                <div class="loc">
                    <input type="email" id="email" required name="email" onchange="checkField(this)">
                    <label for="email">Email</label>
                    <div class="bar"></div>
                </div>
                <div class="loc">
                    <input type="password" id="password" required name="password" onchange="checkField(this)">
                    <label for="password">Senha</label>
                    <div class="bar"></div>
                    <span class="material-symbols-outlined icon">
                        visibility
                    </span>
                </div>
                <button>Cadastrar</button>
                <p class="forgot">Já tem uma conta? <a href="index.php">Entrar</a></p> 
            </form>
            <div class="c"></div>
        </div>
    </div>
    <script src="js/icon.js"></script>
    <script src="js/select.js"></script>
</body>
</html>