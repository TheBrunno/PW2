<?php
    include('include/header-pergunta.php');
?>
        <div class="pergunta">
            <p>Qual o nome dos personagens do Minecraft? (Os da foto) </p>
            <img src="../assets/img/5.jpg">
        </div>
        <form class="respostas" action="pg6.php" method="post">
            <button name="res" value="0">
                <span>A</span>
                João e Maria
            </button>
            <button name="res" value="0">
                <span>B</span>
                Pedro e Maise
            </button>
            <button name="res" value="1">
                <span>C</span>
                Steve e Alex
            </button>
            <button name="res" value="0">
                <span>D</span>
                Marcos e Claudia
            </button>
            <button name="res" value="0">
                <span>E</span>
                Robson e Roberta
            </button>
        </form>
<?php
    include('include/footer-pergunta.php');
?>

