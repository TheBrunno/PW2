<?php
  include('pages/include/header-index.php');
?>
  <div class="container-inf">
      <p>
        Seja em vindo ao nosso quiz sobre <span class="poppins">Minecraft</span>.
      </p>
      <form action="pages/pg1.php" method="post">
        <div class="nick">
          <label for="user">
            Nickname:
          </label>
          <input type="text" name="user" placeholder="notch" id="user">
        </div>
        <button class="button-initial">Iniciar quiz</button>
      </form>
  </div>
<?php
  include('pages/include/footer-pergunta.php');
?>