<?php
    include('include/header-pergunta.php');
?>
        <div class="pergunta">
            <p>Qual é o minério mais raro do Minecraft?</p>
            <img src="../assets/img/1.jpg">
        </div>
        <form class="respostas" action="pg2.php" method="post">
            <button name="a">
                <span>A</span>
                Esmeralda (na ardósia)
            </button>
            <button name="b">
                <span>B</span>
                Cobre
            </button>
            <button name="c">
                <span>C</span>
                Ferro
            </button>
            <button name="d">
                <span>D</span>
                Esmeralda (normal)
            </button>
            <button name="e">
                <span>E</span>
                Diamante
            </button>
        </form>
<?php
    include('include/footer-pergunta.php');
?>
