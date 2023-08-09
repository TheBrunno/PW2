<?php
  include('pages/include/header-result.php');
  session_start();
  $resultados = ["Você definitivamente é um <span class=\"poppins\">Minecrafter</span>", "Você conhece bastante de Minecraft", "Você conhece um pouco de Minecraft", "Você é fraco, lhe falta Monark (de 2012)"];
  if($_SESSION["score"]==10){
    $text = $resultados[0];
  } else if($_SESSION["score"]>6){
    $text = $resultados[1];
  }else if($_SESSION["score"]>3){
    $text = $resultados[2];
  } else{
    $text = $resultados[3];
  }
?>
    <div class="container-inf">
        <h1> <?php echo $text ?></h1>
        <p>Você acertou <?php echo $_SESSION["score"]; ?> de 10 perguntas sobre <span class="poppins">Minecraft</span>.</p>
        <a class="button-initial" href="index.php">Recomeçar quiz</a>
    </div>
    <div class="ranking">
      <h3>Ranking</h3>
      <div class="ranking-wrapper">
        <?php
          include('pages/config/conexao.php');

          $stmt = $pdo->prepare("SELECT * FROM tbUser ORDER BY points DESC");
          $stmt->execute();

          $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
          foreach ($resultados as $row) {
            echo '<div><span class="name">'.$row["nameUser"].'</span>'.'<span class="points">'.$row['points'].'</span></div>';
          }
        ?>
      </div>
    </div>
<?php
  include('pages/include/footer-pergunta.php');
?>
