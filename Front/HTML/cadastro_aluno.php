<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../CSS/cadastro_aluno.css" rel="stylesheet">
    <title>Cadastro Aluno</title>
</head>
<body>
    
    
    <div class="background">
        <div class="container">

            <h2 class="header-cadastro-aluno">CADASTRO ALUNO</h2>

            <form action="" method="POST">
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                </div>
                <div class="form-group col-md-6">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                </div>
                <div class="form-group col-md-12">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group col-md-4">
                    <label for="data">Data de nascimento</label>
                    <input type="date" class="form-control" name="data" id="data">
                </div>
                <div class="form-group col-md-2">
                </div>
                <div class="form-group col-md-6">
                    <label class="sexo">Sexo</label>
                    <div class="input-sexo">
                        <div class="masc">
                            <label for="masc">Masculino</label>
                            <input type="radio" id="masc" name="genero" value="masculino">
                        </div>
                        <div class="fem">
                            <label for="fem">Feminino</label>
                            <input type="radio" id="fem" name="genero" value="feminino">
                        </div>
                        <div class="outro">
                            <label for="outro">Outro</label>
                            <input type="radio" id="outro" name="genero" value="outro">
                        </div>

                    </div>
                </div>
                </div>
                <div class="botoes">
                    <button class="btn btn-danger"><a href="../../index.php">Voltar</a></button>
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Enviar">
                </div>
                
            </form>

        </div>
    </div>

    
    <?php

        session_start();
        if(isset(($_POST['submit']))){
            include_once('config-bd.php');

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $idade = $_POST['data'];
            $sexo = $_POST['genero'];

            if(empty($nome) || empty($senha)){
                print_r("Erro ao cadastrar Aluno");
            }else{
                $result = mysqli_query(($conexao), "INSERT INTO alunos VALUES ('0', '$nome', '$email', '$senha', '$idade', '$sexo');");
                print_r("Aluno Cadastrado");
                header('Location: ../../index.php');
            }

            
        }else{
            
        }

    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>