<?php
session_start();
include_once('../config-bd.php');

if(isset($_SESSION['usuario'])){
  $usuarioP = $_SESSION['usuario'];

  // Consultas para obter disciplinas e alunos
  $sqlDisci = "SELECT * FROM disciplinas ORDER BY idDisci ASC;";
  $resultDisci = $conexao->query($sqlDisci);

  $sqlAlunos = "SELECT * FROM alunos ORDER BY idAluno ASC;";
  $resultAlunos = $conexao->query($sqlAlunos);

  $sqlNotas = "SELECT * FROM notas;";
  $resultNotas = $conexao->query($sqlNotas);

  // Verifica se o formulário foi enviado
  if(isset($_POST['submit'])){
    // Captura os dados enviados com verificação
    $disciplina = isset($_POST['disciplina']) ? $_POST['disciplina'] : '';
    $aluno = isset($_POST['aluno']) ? $_POST['aluno'] : '';
    $nota = isset($_POST['nota']) ? $_POST['nota'] : '';

    // Verifica se os campos não estão vazios
    if(!empty($disciplina) && !empty($aluno) && !empty($nota)){
      // Insere a nota no banco de dados
      $sqlInsert = "INSERT INTO notas (nota, fk_idAluno, fk_idDisci) VALUES ('$nota', '$aluno', '$disciplina')";
      if($conexao->query($sqlInsert) === TRUE) {
        //echo "Nota inserida com sucesso!";
      } else {
        echo "Erro ao inserir a nota: " . $conexao->error;
      }
    } else {
      echo "Preencha todos os campos.";
    }
  }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../../../../favicon.ico">
    <link href="../../CSS/sis_prof_notas.css" rel="stylesheet">

    <title>Sistema Professor - Notas</title>
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Sistema Professores - Notas</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="../login_prof.php">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="../sistema_prof.php">
                  <span data-feather="home"></span>
                  Início <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sis_prof_alunos.php">
                  <span data-feather="users"></span>
                  Alunos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Notas
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="disciplina_prof.php">
                  <span data-feather="layers"></span>
                  Disciplinas
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <h2>Gerenciamento de Notas</h2>
          <div class="container">
            <div class="notas">
              <form action="sis_prof_notas.php" method="POST">
                <!-- Seleção de disciplina -->
                <div class="btn-group">
                  <button type="button" id="dropdownButtonDisci" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Selecione a matéria
                  </button>
                  <ul class='dropdown-menu'>
                    <?php
                      while($user_data = $resultDisci->fetch_assoc()){
                        $idDisci = $user_data['idDisci'];
                        $nomeDisci = $user_data['nomeDisci'];
                        echo "
                          <li><a class='dropdown-item' href='#' onclick=\"changeButtonText('dropdownButtonDisci', '". $nomeDisci ."'); selectDisci('$idDisci')\">". $nomeDisci ."</a></li>
                        ";
                      }
                    ?>
                  </ul>
                  <input type="hidden" id="disciplina" name="disciplina">
                </div>

                <!-- Seleção de aluno -->
                <div class="btn-group">
                  <button type="button" id="dropdownButtonAluno" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Selecione o aluno
                  </button>
                  <ul class="dropdown-menu">
                    <?php
                      while($user_data = $resultAlunos->fetch_assoc()){
                        $idAluno = $user_data['idAluno'];
                        $nomeAluno = $user_data['nomeAluno'];
                        echo "
                          <li><a class='dropdown-item' href='#' onclick=\"changeButtonText('dropdownButtonAluno', '". $nomeAluno ."'); selectAluno('$idAluno')\">". $nomeAluno ."</a></li>
                        ";
                      }
                    ?>
                  </ul>
                  <input type="hidden" id="aluno" name="aluno">
                </div>

                <!-- Input para a nota -->
                <input class="input-nota" type="number" id="nota" name="nota" min="0" max="100" placeholder="Insira a nota (0 - 100)" required>
                <input class="btn btn-primary" type="submit" id="sumbit" name="submit" value="Salvar">
              </form>

              


            </div><!--NOTAS-->

            <!--<div class="alunos">

              <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">idAluno</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Nota</th>
                            </tr>
                        </thead>

                        <tbody>
                          
                            <?php
                                while($user_data = mysqli_fetch_assoc($resultAlunos)){
                                    echo "<tr>";
                                    echo "<td>" . $user_data['idAluno'] . "</td>";
                                    echo "<td>" . $user_data['nomeAluno'] . "</td>";
                                    
                                    echo "</tr>";
                                }
                                


                            ?>
                        </tbody>
                    </table>
                </div>

            </div>-->
          

                      

          </div>
        </main>
      </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      function changeButtonText(buttonId, option) {
        document.getElementById(buttonId).textContent = option;
      }

      // Função para selecionar disciplina
      function selectDisci(id) {
        document.getElementById('disciplina').value = id;
      }

      // Função para selecionar aluno
      function selectAluno(id) {
        document.getElementById('aluno').value = id;
      }
    </script>
    <script>
      feather.replace()
    </script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  </body>
</html>
