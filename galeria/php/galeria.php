<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="wrapper galeria">
        <?php
            session_start(); 
            echo "<h1 class=\"welcome\">Welcome, ".ucfirst($_SESSION['username'])."</h1>";
        ?>
        <h2>Japanese songs </h2>
        <div class="row-container-gal">
            <div class="imgs">
                <img src="../img/anime/one.jfif">
                <p class="songname">私は最強</p>
                <p class="description">2022 - Ado</p>
            </div>
            <div class="imgs">
                <img src="../img/anime/two.jfif">
                <p class="songname">うっせぇわ</p>
                <p class="description">2020 - Ado</p>
            </div>
            <div class="imgs">
                <img src="../img/anime/six.jpeg">
                <p class="songname">ツユ - やっぱり雨はるんだね</p>
                <p class="description">2021 - ツユ (TUYU)</p>
            </div>
            <div class="imgs">
                <img src="../img/anime/four.jfif">
                <p class="songname">Kyougen</p>
                <p class="description">2022 - Ado</p>
            </div>
            <div class="imgs">
                <img src="../img/anime/five.jfif">
                <p class="songname">新時代</p>
                <p class="description">2022 - Ado</p>            </div>
        </div>
        <h2>Brazilian songs</h2>
        <div class="row-container-gal">
            <div class="imgs">
                <img src="../img/funk/one.jfif">
                <p class="songname">Furacão 2000</p>
                <p class="description">2010 - Multiplos</p>
            </div>
            <div class="imgs">
                <img src="../img/funk/two.jfif">
                <p class="songname">Salve pra favela</p>
                <p class="description">2019 - MC. Poze</p>
            </div>
            <div class="imgs">
                <img src="../img/funk/three.jfif">
                <p class="songname">Se eu tiver solteiro</p>
                <p class="description">2022 - MC. Don Juan</p>
            </div>
            <div class="imgs">
                <img src="../img/funk/four.jfif">
                <p class="songname">Eu vou te pegar</p>
                <p class="description">2022 - MC. Pedrinho</p>
            </div>
            <div class="imgs">
                <img src="../img/funk/five.jfif">
                <p class="songname">É nois</p>
                <p class="description">2022 - GRT 31</p>            </div>
        </div>
    </div>
</body>
</html>