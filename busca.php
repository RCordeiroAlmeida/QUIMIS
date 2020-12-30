<?php
    include_once 'banco/conexao.php';

    $busca = $_POST['busca'];
    //echo $busca;
    $result_busca = "SELECT * FROM cliente WHERE nome LIKE '%$busca%'";
    mysqli_query($conexao, $result_busca);

    while($rows_busca = mysqli_fetch_array($result_busca)){
        echo "Cliente cadastrado: ".$rows_busca['nome']."<br>";
    }
?>
