<?php

include_once('../config-bd.php');

if(isset($_POST['update'])){

    $id = $_POST['idAluno'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $idade = $_POST['data'];
    $sexo = $_POST['genero'];

    $sqlUpdate = "UPDATE alunos SET nomeAluno='$nome', emailAluno='$email', senhaAluno='$senha', idadeAluno='$idade', sexoAluno='$sexo'
    WHERE idAluno='$id';";

    $result = $conexao->query($sqlUpdate);

    

}

header('Location: sis_prof_alunos.php');


?>