<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo pedido</title>
</head>
<body>
    <?php
         require_once '../banco/conexao.php';
         $query = "SELECT * FROM cliente ORDER BY nome ASC";
         $execut = mysqli_query($conexao,$query);
         
         while ($dados = mysqli_fetch_array($execut)){
            $id = $_POST['id_cliente'];
            $nome = $_POST['nome'];
            $cnpj = $_POST['cnpj'];
            $ie = $_POST['ie'];
            $tel = $_POST['telefone'];
            $cel = $_POST['celular'];
            $email = $_POST['email'];
            $cep = $_POST['cep'];
            $log = $_POST['logradouro'];
            $num = $_POST['numero'];
            $comp = $_POST['complemento'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $uf = $_POST['uf'];
        
            echo"
                <p>$nome</p>
            ";
         }
    ?>
</body>
</html>