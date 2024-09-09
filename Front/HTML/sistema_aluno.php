<?php
    session_start();
    //print_r($_SESSION);
    include_once('config-bd.php');
    if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: ../../index.php');
    } else {
        $logado = $_SESSION['usuario'];
    }

    $usuario = $_SESSION['usuario'];

    $sql = "SELECT nomeAluno FROM alunos ORDER BY idAluno;";
    $result = $conexao->query($sql);

    
    $sqlId = "SELECT * FROM alunos WHERE nomeAluno = '$usuario';";
    $resultId = $conexao->query($sqlId);

    /*while($user_data = mysqli_fetch_assoc($resultId)){
      echo "Id: " . $user_data['idAluno'];
      
    }*/

    

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../CSS/sistema_aluno.css" rel="stylesheet">
    <title>Sistema Alunos</title>
</head>

<body>

    <!--<?php echo "<h1>Bem vindo <u>$logado</u></h1>"; ?>-->

    <container>
        
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Sistema Alunos</a>
      
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../../index.php">Sair</a>
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
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Notas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Disciplinas
                </a>
              </li>
              
            </ul>

            
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          

          <h2>Dados do Aluno</h2>
          <div class="container">
            <div class="info">
              
              <div class="chave">
                <ul class="list-group"><li class="list-group-item list-group-item-primary">ID Aluno</li>
                <ul class="list-group"><li class="list-group-item list-group-item-primary">Nome Aluno</li>
                <ul class="list-group"><li class="list-group-item list-group-item-primary">E-mail Aluno</li>
                <ul class="list-group"><li class="list-group-item list-group-item-primary">Senha Aluno</li>
                <ul class="list-group"><li class="list-group-item list-group-item-primary">Idade Aluno</li>
                </ul>
              </div>
              <div class="valor">
                  <?php 
                  while($user_data = mysqli_fetch_assoc($resultId)){
                    echo "<ul class='list-group'><li class='list-group-item list-group-item-secondary'>" . $user_data['idAluno'] . "</li>";
                    echo "<ul class='list-group'><li class='list-group-item list-group-item-secondary'>" . $user_data['nomeAluno'] . "</li>";
                    echo "<ul class='list-group'><li class='list-group-item list-group-item-secondary'>" . $user_data['emailAluno'] . "</li>";
                    echo "<ul class='list-group'><li class='list-group-item list-group-item-secondary'>" . $user_data['senhaAluno'] . "</li>";
                    echo "<ul class='list-group'><li class='list-group-item list-group-item-secondary'>" . $user_data['idadeAluno'] . "</li>";
                    $sexoAluno = $user_data['sexoAluno'];
                  }
                  ?>
              </div>
              
              

            </div>
            <div class="image">
              <?php 

                if($sexoAluno == 'feminino'){
                  echo "
                  <div class='foto-aluno'>
                  ";
                }else if($sexoAluno == 'masculino'){
                  echo "
                  <div class='foto-aluna'>
                  ";
                }

              ?>

              

                
              </div>
              <div class="sexo-aluno"><span><?php echo $sexoAluno ?></span></div>
            </div>
          </div>
          
          
        </main>
      </div>
    </div>
    
    </container>




    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>