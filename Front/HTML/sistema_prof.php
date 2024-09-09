<?php

session_start();
include_once('config-bd.php');

if(isset($_SESSION['usuario'])){
  $usuarioP = $_SESSION['usuario'];

  $sqlIdP = "SELECT * FROM professores WHERE nomeProf = '$usuarioP';";
  $resultIdP = $conexao->query($sqlIdP);

  /*if($resultIdP->num_rows > 0){

    while($row = $resultIdP->fetch_assoc()){
      echo "ID: " .$row['idProf'];
    }
  }else{
    
  }*/


}



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
    <link href="../CSS/sistema_prof.css" rel="stylesheet">

    <title>Sistema Professor</title>

    
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Sistema Professores</a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="login_prof.php">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Início <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sistema_prof/sis_prof_alunos.php">
                  <span data-feather="users"></span>
                  Alunos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sistema_prof/sis_prof_notas.php">
                  <span data-feather="file"></span>
                  Notas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sistema_prof/disciplina_prof.php">
                  <span data-feather="layers"></span>
                  Disciplinas
                </a>
              </li>
              
            </ul>

            
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          

        <h2>Dados do Professor</h2>
          <div class="container">
            <div class="info">
              
              <div class="chave">
                <ul class="list-group"><li class="list-group-item list-group-item-primary">ID Professor</li>
                <ul class="list-group"><li class="list-group-item list-group-item-primary">Nome Professor</li>
                <ul class="list-group"><li class="list-group-item list-group-item-primary">E-mail Professor</li>
                <ul class="list-group"><li class="list-group-item list-group-item-primary">Senha Professor</li>
                <ul class="list-group"><li class="list-group-item list-group-item-primary">Idade Professor</li>
                </ul>
              </div>
              <div class="valor">
                  <?php 
                  while($user_data = mysqli_fetch_assoc($resultIdP)){
                    echo "<ul class='list-group'><li class='list-group-item list-group-item-secondary'>" . $user_data['idProf'] . "</li>";
                    echo "<ul class='list-group'><li class='list-group-item list-group-item-secondary'>" . $user_data['nomeProf'] . "</li>";
                    echo "<ul class='list-group'><li class='list-group-item list-group-item-secondary'>" . $user_data['emailProf'] . "</li>";
                    echo "<ul class='list-group'><li class='list-group-item list-group-item-secondary'>" . $user_data['senhaProf'] . "</li>";
                    echo "<ul class='list-group'><li class='list-group-item list-group-item-secondary'>" . $user_data['idadeProf'] . "</li>";
                    $sexoProf = $user_data['sexoProf'];
                    $especiProf = $user_data['especializacao'];
                  }
                  ?>
              </div>
              
              

            </div>
            <div class="image">
              <?php 

                if($sexoProf == 'feminino'){
                  echo "
                  <div class='foto-aluno'>
                  ";
                }else if($sexoProf == 'masculino'){
                  echo "
                  <div class='foto-aluna'>
                  ";
                }

              ?>

              

                
              </div>
              <div class="sexo-aluno"><span><?php echo $especiProf  ?></span></div>
              <div class="sexo-aluno"><span><?php echo $sexoProf ?></span></div>
          
        </main>
      </div>
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
