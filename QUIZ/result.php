<?php
  include('pages/include/header-result.php');
  session_start();
  $resultados = ["Você definitivamente é um <span class=\"poppins\">Minecrafter</span>", "Você conhece bastante de Minecraft", "Você conhece um pouco de Minecraft", "Você é fraco, lhe falta Monark (de 2012)"];
  $cores = ["#D0A99F", "#C4F995", "#95E5F9", "#9F95F9", "#FFD55F", "#FF5F5F", "#A2FFF7", "#45F9B1", "#FF94EE", "#B894FF", "#FFFFFF"];
  if($_SESSION["score"]==10){
    $text = $resultados[0];
  } else if($_SESSION["score"]>6){
    $text = $resultados[1];
  }else if($_SESSION["score"]>3){
    $text = $resultados[2];
  } else{
    $text = $resultados[3];
  }
  $por = $_SESSION["score"] / 10 * 100; 
?>
    <div class="container-inf">
        <h1> <?php echo $text ?></h1>
        <p>Você acertou <?php echo "<span style=color:" . $cores[$_SESSION["score"]] . ">" . $_SESSION["score"]; "a" . "</span>" ?></span> de 10 perguntas sobre <span class="poppins">Minecraft</span>.</p>
        <p>Porcentagem de acerto: <?php echo $por ?>%</p>
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
