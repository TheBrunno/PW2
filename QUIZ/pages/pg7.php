<?php
    include('include/header-pergunta.php');
?>
        <div class="pergunta">
            <p>Qual efeito o husk te dá quando te bate?</p>
            <img src="../assets/img/7.jpg">
        </div>
        <form class="respostas" action="pg8.php" method="post">
            <button name="a">
                <span>A</span>
                Veneno
            </button>
            <button name="b">
                <span>B</span>
                Fome
            </button>
            <button name="c">
                <span>C</span>
                Darkness
            </button>
            <button name="d">
                <span>D</span>
                Náusea
            </button>
            <button name="e">
                <span>E</span>
                Nenhuma das anteriores
            </button>
        </form>
<?php
    include('include/footer-pergunta.php');
?>
