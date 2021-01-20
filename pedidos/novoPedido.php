<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo pedido</title>
</head>
<body>
    <?php
        //print_r($_POST);

        $id = $_POST['id_pedido'];
        //echo $id;
        
         require_once '../banco/conexao.php';
         $query = "SELECT * FROM cliente WHERE id_cliente=$id ORDER BY nome ASC";
         $execut = mysqli_query($conexao,$query);
         
         while ($dados = mysqli_fetch_array($execut)){
            $id = $dados['id_cliente'];
            $nome = $dados['nome'];
            $cnpj = $dados['cnpj'];
            $ie = $dados['ie'];
            $tel = $dados['telefone'];
            $cel = $dados['celular'];
            $email = $dados['email'];
            $cep = $dados['cep'];
            $log = $dados['logradouro'];
            $num = $dados['numero'];
            $comp = $dados['complemento'];
            $bairro = $dados['bairro'];
            $cidade = $dados['cidade'];
            $uf = $dados['UF'];
        
            echo"
                <p>$nome</p>
            ";
         }
    ?>
</body>
</html>