<h2>Usuário não encontrado</h2>
<?php

    session_start();
    if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){

    include_once('config-bd.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM alunos WHERE nomeAluno = '$usuario' and senhaAluno = '$senha';";

    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) > 0){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['senha'] = $senha;
        header('Location: sistema_aluno.php');
    }else{
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('Location: ../../index.php');
    }

    
    }

?>