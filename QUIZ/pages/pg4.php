<?php
    include('include/header-pergunta.php');
?>
        <div class="pergunta">
            <p>Qual é o nome da empresa que fez o Minecraft?</p>
            <img src="../assets/img/4.jpg">
        </div>
        <form class="respostas" action="pg5.php" method="post">
            <button name="a">
                <span>A</span>
                Rockstar
            </button>
            <button name="b">
                <span>B</span>
                Mojang
            </button>
            <button name="c">
                <span>C</span>
                Epic Games
            </button>
            <button name="d">
                <span>D</span>
                Garena
            </button>
            <button name="e">
                <span>E</span>
                Blizzard
            </button>
        </form>
<?php
    include('include/footer-pergunta.php');
?>

