<?php
  include('pages/include/header-result.php');
  session_start();
?>
    <div class="container-inf">
        <h1>Você definitivamente é um <span class="poppins">Minecrafter</span></h1>
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