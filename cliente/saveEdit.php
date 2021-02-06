<!DOCTYPE html>
<html lang="pt=BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirma Edição</title>
</head>
<body>

    <?php
        //var_dump($_POST);
        require_once '../banco/conexao.php';

        $id = $_POST['id_cliente'];
        $nome = $_POST['nome'];
        $cnpj = $_POST['cnpj'];
        $ie = $_POST['ie'];
        $client = $_POST['client'];
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

        $verifica = "SELECT cnpj FROM cliente WHERE cnpj='$cnpj' AND id_cliente!='$id'";
        //echo $verifica;

        $check = mysqli_query($conexao,$verif);
        $reg = mysqli_num_rows($check);

        if ($reg>0){
            echo "<script>
                    alert('Opa, esse CNPJ já está registrado na base de dados. Não é permitido cadastrar o CNPJ mais de uma vez!');
                    location.href='cliente/clientes.php';
                </script>
            ";
        }else{
            $query = "UPDATE cliente SET nome='$nome', cnpj='$cnpj', ie='$ie', telefone='$tel', celular='$cel', email='$email', cep='$cep', logradouro='$log', numero='$num', 
            complemento='$comp', bairro='$bairro', cidade='$cidade', uf='$uf' WHERE id_cliente = $id";
            $update = mysqli_query($conexao,$query);
            if($update==1){
                echo "<script>
                    alert('Alterações salvas com sucesso!');
                    location.href='clientes.php';
                </script>
                ";exit;
            }else{
                echo "<script>
                    alert('Ocorreu um erro...');
                    location.href='clientes.php';
                </script>
                ";
            }
        }
    ?>
</body>
</html>