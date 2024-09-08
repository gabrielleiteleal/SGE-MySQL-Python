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

    $sql = "SELECT nomeAluno FROM alunos ORDER BY idAluno;";
    $result = $conexao->query($sql);

    print_r($result);

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
    

    <header>
        <h2>Dados do Aluno</h2>
    </header>

    <!--<?php echo "<h1>Bem vindo <u>$logado</u></h1>"; ?>-->

    <container>
        <div class="dados">

            <div class="nome">
                <label>Nome do aluno</label>
                <div class="valor"></div>
            </div>
            <div class="idade">
                <label>Data do <br>nascimento</label>
                <div class="valor"></div>
            </div>
            <div class="email">
                <label>E-mail do aluno</label>
                <div class="valor"></div>
            </div>
            <div class="sexo">
                <label>Sexo do <br>aluno</label>
                <div class="valor"></div>
            </div>
            <div class="disciplina">
                <label>Disciplinas<br> do aluno</label>
                <div class="valor"></div>
            </div>

        </div>
        <div class="bloco-direita">
            <div class="imagem"></div>
            <div class="sexo"></div>
        </div>


        


        
    
    </container>





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