<?php

    $dbHost = 'localHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'gerenciamento-escolar';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao -> connect_error){
        echo "404";
    }else{
        echo "200";
    }

?>