<?php

if (isset($_GET['idAluno'])) {
    include_once('../config-bd.php');

    $id = $_GET['idAluno'];

    
    $sqlSelect = "SELECT * FROM alunos WHERE idAluno = $id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {

        $sqlDelete = "DELETE FROM alunos WHERE idAluno='$id'";
        $resultDelete = $conexao->query($sqlDelete);
        header('Location: sis_prof_alunos.php');


    } else {

        header('Location: sis_prof_alunos.php');

    }



}


?>