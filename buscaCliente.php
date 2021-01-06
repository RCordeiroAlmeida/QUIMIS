<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!--Import Google Icon Font-->
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <!--Import materialize.css-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
    <title>Novo Cadastro</title>
</head>
<body>

    <?php
        include_once 'banco/conexao.php';
        //print_r($_POST);exit;
        $busca = $_POST['busca'];
        //echo $busca;
        if ($busca==null) {
            echo "<script>
                    alert('Ops, o campo busca está vazio!');
                    location.href='clientes.php';
                </script>";exit;
        }else {
            $result_busca = "SELECT * FROM cliente WHERE nome LIKE '%$busca%'";
            $resultado_busca = mysqli_query($conexao, $result_busca);
            $row = mysqli_num_rows($resultado_busca);
            //echo $row;exit;
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
                    $bairro = $rows_busca['bairro'];
                    $cidade = $rows_busca['cidade'];
                    $UF = $rows_busca['UF'];
                    
                    echo "<h3 class='light'>Resultado da busca</h3>";
                    echo "<form action = 'editarCliente.php' method = 'POST'>
                        Nome: $nome
                        <br/><br>
                        CNPJ: $cnpj
                        <br/><br>
                        Inscrição Estadual: $ie
                        <br/><br>
                        Telefone: .telefone
                        <br/><br>
                        Celular: $celular
                        <br/><br>
                        E-mail: $email
                        <br/><br>
                        CEP: $cep
                        <br/><br>
                        Rua: $logradouro
                        <br/><br>
                        Número: $numero
                        <br/><br>
                        Complemento: $complemento
                        <br/><br>
                        Bairro: $bairro
                        <br/><br>
                        Cidade: $cidade
                        <br/><br>
                        Estado: $UF
                        <br/><br/>
                        <button type='submit' class='btn'>Editar</button>
                    </form>";
                }   
            }else{
                echo "<script>
                        alert('Nenhum cliente cadastrado corresponde à sua busca');
                        location.href='index.php';
                    </script>";
            }
        }
    ?>
    <!--JavaScript at end of body for optimized loading-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
    <script src='https://code.jquery.com/jquery-3.0.0.min.js'></script>
    <script> M.AutoInit();</script>
</body>
</html>

