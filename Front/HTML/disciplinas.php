<?php

    include_once('config-bd.php');
    
    $sqlDisci = "SELECT * FROM disciplinas;";
    $resultDisci = $conexao->query($sqlDisci);

    /*if($resultDisci->num_rows > 0){
        while($row = $resultDisci->fetch_assoc()){
            echo "ID: " .$row['nomeDisci'];
        }
    }*/

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href="../../../../favicon.ico">
    <link href="../CSS/disciplinas.css" rel="stylesheet">

    <title>Disciplinas</title>

    
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Disciplinas</a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../../index.php">Sair</a>
        </li>
      </ul>
    </nav>


    <div class="container">


        <?php
        
            while($row = $resultDisci->fetch_assoc()){
                $nomeDisci = $row['nomeDisci'];
                $descDisci = $row['descDisci'];
                echo "
                    <div class='container-disci'>
                        <div class='nome'>$nomeDisci</div>
                        <div class='desc'>$descDisci</div>
                    </div>
                ";
            }

        ?>

    </div>
    
    
          
              
              
          

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    
  </body>
</html>