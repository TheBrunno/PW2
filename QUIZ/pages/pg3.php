<?php
    include('include/header-pergunta.php');
?>
        <div class="pergunta">
            <p>Qual encantamento aumenta a porcentagem de drops dos mobs?</p>
            <img src="../assets/img/3.webp">
        </div>
        <form class="respostas" action="pg4.php" method="post">
            <button name="a">
                <span>A</span>
                Unbreaking
            </button>
            <button name="b">
                <span>B</span>
                Looting
            </button>
            <button name="c">
                <span>C</span>
                Fortune
            </button>
            <button name="d">
                <span>D</span>
                Sharpness
            </button>
            <button name="e">
                <span>E</span>
                Mending
            </button>
        </form>
<?php
    include('include/footer-pergunta.php');
?>

