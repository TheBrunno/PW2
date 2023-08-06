<?php
    include('include/header-inicio.php');
?>
        <div class="pergunta">
            <p>Qual é o minério mais raro do Minecraft?</p>
            <img src="../assets/img/1.jpg">
        </div>
        <form class="respostas" action="pg2.php" method="post">
            <button name="res" value="1">
                <span>A</span>
                Esmeralda (na ardósia)
            </button>
            <button name="res" value="0">
                <span>B</span>
                Cobre
            </button>
            <button name="res" value="0">
                <span>C</span>
                Ferro
            </button>
            <button name="res" value="0">
                <span>D</span>
                Esmeralda (normal)
            </button>
            <button name="res" value="0">
                <span>E</span>
                Diamante
            </button>
        </form>
<?php
    include('include/footer-pergunta.php');
?>
