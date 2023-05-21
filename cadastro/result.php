<?php
    include('nav.php');
    if(!$_POST['name'] || !$_POST['email'] || !$_POST['age'] || !$_POST['password']){
        header('location: index.php');
    }
    $fuso = new DateTimeZone('America/Sao_Paulo');
    $data = new DateTime();
    $data->setTimezone($fuso);
    $hora = $data->format('H');
    $status = '';

    if($hora >= 6 && $hora < 12){
        $status = 'Bom dia';
    }else if($hora >= 12 && $hora < 18){
        $status = 'Boa tarde';
    }else{
        $status = 'Boa noite';
    }
?>
    <main class="result-main">
        <div class="profile">
            <div class="main-info">
                <img src="assets/person.png">
                <h1><?php echo $_POST['name'] ?></h1>
                <p><?php echo $_POST['state'] ?></p>
            </div>
            <div class="add-info">
                <h2><?php echo $status.", ".$_POST['name'] ?></h2>
                <?php
                    if($_POST['more']){
                        echo "<p class=\"description-field\">".$_POST['more']."</p>";
                    }
                ?>
                <ul class="topic-list">
                    <li><span class="topic">Email:</span> <?php echo $_POST['email'] ?></li>
                    <li><span class="topic">Idade:</span> <?php echo $_POST['age'] ?></li>
                    <li><span class="topic">Gênero:</span> <?php echo $_POST['gender'] ?></li>
                    <li><span class="topic">País:</span> Brasil</li>
                    <li><span class="topic">Estado:</span> <?php echo $_POST['state'] ?></li>
                </ul>
                <div class="interest-container">
                    <p class="interest-result">
                        <span class="topic">Interesses:</span>
                    </p>
                        <?php
                            if(isset($_POST["interest"])){
                                echo "<ul class=\"interest-list\">";
                                foreach($_POST["interest"] as $interest){
                                    echo "<li>".$interest."</li>";
                                }
                                echo "</ul>";
                            }else{
                                echo " <p>&nbsp;sem interesses :(</p>";
                            }
                        ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>