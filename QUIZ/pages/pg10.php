<?php
    include('include/header-pergunta.php');
?>
        <div class="pergunta">
            <p>Qual é a maneira mais fácil de conseguir maçã dourada encantada? </p>
            <img src="../assets/img/10.gif">
        </div>
        <form class="respostas" action="config/cadastro.php" method="post">
            <button name="res" value="0">
                <span>A</span>
                No templo do deserto
            </button>
            <button name="res" value="1">
                <span>B</span>
                Na Deep Dark
            </button>
            <button name="res" value="0">
                <span>C</span>
                Nas estruturas do Nether
            </button>
            <button name="res" value="0">
                <span>D</span>
                Nas Dungeons
            </button>
            <button name="res" value="0">
                <span>E</span>
                Na Stronghold
            </button>
        </form>
<?php
    include('include/footer-pergunta.php');
?>
