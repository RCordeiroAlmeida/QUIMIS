<?php
    ini_set('default_charset', 'UTF-8');
    
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "quimis";

    $conexao = mysqli_connect($servername, $username, $password, $dbname);
    $conexao->query("SET NAMES utf8");

    if(mysqli_connect_error()){
        echo "Erro de conexão: ".mysqli_connect_error();
    }

?>