<?php
    include('include/header-pergunta.php');
?>
        <div class="pergunta">
            <p>Endermans são encontrados em quais dimensões? </p>
            <img src="../assets/img/8.webp">
        </div>
        <form class="respostas" action="pg9.php" method="post">
            <button name="res" value="1">
                <span>A</span>
                Overworld, Nether e The End
            </button>
            <button name="res" value="0">
                <span>B</span>
                Overworld e The End
            </button>
            <button name="res" value="0">
                <span>C</span>
                The End
            </button>
            <button name="res" value="0">
                <span>D</span>
                Nether
            </button>
            <button name="res" value="0">
                <span>E</span>
                Overworld
            </button>
        </form>
<?php
    include('include/footer-pergunta.php');
?>

