<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo pedido</title>
</head>
<body>
    <table border = "1">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>id cliente teste</th>
                <th>idproduto teste</th>
            </tr>
        </thead>
        <?php
            require_once "../banco/conexao.php";
            var_dump($_POST);

            $id_cliente = $_POST['id_cliente'];

            $query = "SELECT * FROM produtos";
            //echo $query;
            $execut = mysqli_query($conexao,$query);

            while($dados = mysqli_fetch_array($execut)){
                //var_dump($dados);exit;
                $id_prod = $dados['id_produto'];
                $nproduto = $dados['nome'];
                $preço = $dados['precoMed'];
                
                echo "
                    <tbody>
                        <tr>
                            <td>$nproduto</td>
                            <td>$preço</td>
                            <td>$id_cliente</td>
                            <td>$id_prod</td>
                        </tr>
                    </tbody>
                ";

            }
        ?>
    </table> 
</body>
</html>