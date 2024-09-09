<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="../css/login_prof_style.css" rel="stylesheet" type="text/css">
    <title>Sistema Escolar</title>
</head>

<body>


  <nav class="menu-lateral">
    
    <div class="btn-expandir">
      <i class="bi bi-list"></i>
    </div>

    <ul>
      <li class="item-menu">
        <a href="../../index.php">
          <span class="icon">
            <i class="bi bi-mortarboard"></i></span>
          <span class="txt-link">Aluno</span>
        </a>
      </li><!--ALUNO-->
      <li class="item-menu">
        <a href="login_prof.php">
          <span class="icon"><i class="bi bi-person-workspace"></i></span>
          <span class="txt-link">Professor</span>
        </a>
      </li><!--PROFESSOR-->
      <li class="item-menu">
        <a href="disciplinas.php">
          <span class="icon"><i class="bi bi-stack"></i></span>
          <span class="txt-link">Disciplinas</span>
        </a><!--NOTAS ALUNOS-->
      </li>
    </ul>

  </nav><!--MENU-LATERAL-->

    <main>

        <!--<div class="header-alunos">Cadastro Alunos</div>-->
        
        <div class="background">

          <div class="form-back"></div>

          <form class="form" action="teste_login_prof.php" method="POST">

              <h2>Login Professor</h2>
              <input class="usuario" type="text" name="usuario" placeholder="Usuario"/>
              <input class="senha" type="password" name="senha" placeholder="Senha"/>
              <div class="checkbox">
                  <input type="checkbox" name="checkbox"/>
                  <span>Lembrar-me</span>
              </div><!--Checkbox-->

              <div class="recuperar">
                  <a href="#" target="_blank">Esqueci minha senha</a>
              </div><!--Recuperar-->

              <div class="clear"></div>

              <input class="enviar" type="submit" name="submit" id="submit" value="Login"/>
              <span>Não está cadastrado?</span>
              <a href="cadastro_prof.php" target="">Cadastrar-se</a>

          </form><!--Form-->


      </div><!--Background-->

    </main><!--MAIN-->

    <div class="clear"></div>


    

    
    <!--<script src="../js/functions.js" defer></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>