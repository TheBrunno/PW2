<?php
    include('include/header-pergunta.php');
?>
        <div class="pergunta">
            <p>Qual efeito o husk te dá quando te bate? </p>
            <img src="../assets/img/7.jpg">
        </div>
        <form class="respostas" action="pg8.php" method="post">
            <button name="res" value="0">
                <span>A</span>
                Veneno
            </button>
            <button name="res" value="1">
                <span>B</span>
                Fome
            </button>
            <button name="res" value="0">
                <span>C</span>
                Darkness
            </button>
            <button name="res" value="0">
                <span>D</span>
                Náusea
            </button>
            <button name="res" value="0">
                <span>E</span>
                Nenhuma das anteriores
            </button>
        </form>
<?php
    include('include/footer-pergunta.php');
?>
