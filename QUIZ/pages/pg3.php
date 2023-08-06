<?php
    include('include/header-pergunta.php');
?>
        <div class="pergunta">
            <p>Qual encantamento aumenta a porcentagem de drops dos mobs? </p>
            <img src="../assets/img/3.webp">
        </div>
        <form class="respostas" action="pg4.php" method="post">
            <button name="res" value="0">
                <span>A</span>
                Unbreaking
            </button>
            <button name="res" value="1">
                <span>B</span>
                Looting
            </button>
            <button name="res" value="0">
                <span>C</span>
                Fortune
            </button>
            <button name="res" value="0">
                <span>D</span>
                Sharpness
            </button>
            <button name="res" value="0">
                <span>E</span>
                Mending
            </button>
        </form>
<?php
    include('include/footer-pergunta.php');
?>

