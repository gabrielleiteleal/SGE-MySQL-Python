<h2>Professor não encontrado</h2>


<?php

    
      if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){

      include_once('config-bd.php');

      $usuarioP = $_POST['usuario'];
      $senhaP = $_POST['senha'];

      $sqlP = "SELECT * FROM professores WHERE nomeProf = '$usuarioP' and senhaProf = '$senhaP';";

      $result = $conexao->query($sqlP);

      if(mysqli_num_rows($result) > 0){
          $_SESSION['usuario'] = $usuarioP;
          $_SESSION['senha'] = $senhaP;
          header('Location: sistema_prof.php');
      }else{
          unset($_SESSION['usuario']);
          unset($_SESSION['senha']);
          header('Location: login_prof.php');
      }

      
      }

    ?>
    