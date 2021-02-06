<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/table.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!---->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <title>Novo pedido</title>
</head>
<body>
    <table border = "1">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>idcliente teste</th>
                <th>idproduto teste</th>
            </tr>
        </thead>
        <?php
            require_once "../banco/conexao.php";
            //var_dump($_POST);

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
    <form action = 'detalhes.php' method = 'POST'/>
        <input type = 'hidden' name = 'id_cliente' value = '$id'/>
        <button type = 'submit' class='waves-effect waves-green btn-flat'>Finalizar pedido</button>
        <a href='clientes.php' class='waves-effect waves-green btn-flat'>Voltar</a>
    </form>
</body>
<!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>M.AutoInit();</script
</html>