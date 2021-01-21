<?php
    var_dump($_POST);
    require_once "../banco/conexao.php";

    $id = $_POST['id_clientep'];
    echo $id;

?>