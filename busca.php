<?php
    include_once 'banco/conexao.php';
    $busca = $_POST['busca'];
    //echo $busca;
    $result_busca = "SELECT * FROM cliente WHERE nome LIKE '%$busca%'";
    $resultado_busca = mysqli_query($conexao, $result_busca);
    $row = mysqli_num_rows($resultado_busca);
    if($row > 0){
        while($rows_busca = mysqli_fetch_array($resultado_busca)){
            $nome = $rows_busca['nome'];
            $cnpj = $rows_busca['cnpj'];
            $ie = $rows_busca['ie'];
            $telefone = $rows_busca['telefone'];
            $celular = $rows_busca['celular'];
            $email = $rows_busca['email'];
            $cep = $rows_busca['cep'];
            $logradouro = $rows_busca['logradouro'];
            $numero = $rows_busca['numero'];
            $complemento = $rows_busca['complemento'];
            $cidade = $rows_busca['cidade'];
            $UF = $rows_busca['UF'];
            echo "Nome: ".$nome;
            echo "<br/><br>";
            echo "CNPJ: ".$cnpj;
            echo "<br/><br>";
            echo "Inscrição Estadual: ".$ie;
            echo "<br/><br>";
            echo "Telefone: ".$telefone;
            echo "<br/><br>";
            echo "Celular: ".$celular;
            echo "<br/><br>";
            echo "E-mail: ".$email;
            echo "<br/><br>";
            echo "CEP: ".$cep;
            echo "<br/><br>";
            echo "Logradouro ".$logradouro;
            echo "<br/><br>";
            echo "Número: ".$numero;
            echo "<br/><br>";
            echo "Complemento: ".$complemento;
            echo "<br/><br>";
            echo "Cidade: ".$cidade;
            echo "<br/><br>";
            echo "UF: ".$UF;
        }   
    }else{
        echo "Nenhum cliente cadastrado corresponde à busca: ".$busca;
    }
?>
