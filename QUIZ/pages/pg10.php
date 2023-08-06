<?php
    include('include/header-pergunta.php');
?>
        <div class="pergunta">
            <p>Qual é a maneira mais fácil de conseguir maçã dourada encantada?</p>
            <img src="../assets/img/10.gif">
        </div>
        <form class="respostas" action="../result.php" method="post">
            <button name="a">
                <span>A</span>
                No templo do deserto
            </button>
            <button name="b">
                <span>B</span>
                Na Deep Dark
            </button>
            <button name="c">
                <span>C</span>
                Nas estruturas do Nether
            </button>
            <button name="d">
                <span>D</span>
                Nas Dungeons
            </button>
            <button name="e">
                <span>E</span>
                Na Stronghold
            </button>
        </form>
<?php
    include('include/footer-pergunta.php');
?>
