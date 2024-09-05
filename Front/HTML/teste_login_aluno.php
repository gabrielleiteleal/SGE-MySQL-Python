<?php

    if(isset($_POST['submit'])){

    include_once('config-bd.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $idade = $_POST['data'];
    $sexo = $_POST['genero'];

    $result = mysqli_query(($conexao), "INSERT INTO alunos VALUES ('', '$nome', '$email', '$senha', '$idade', '$sexo');");
    }

    print_r($_REQUEST);

?>