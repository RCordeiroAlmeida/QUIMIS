<?php
    require_once "../banco/conexao.php";
    print_r($id_cliente);exit;
    $sql = $conexao -> query("SELECT nome FROM cliente WHERE id_cliente=".$id_cliente);
    $cliente = mysqli_fetch_array($sql);
    echo $cliente['nome'];exit;
?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/table.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Novo pedido</title>
</head>
<body>
    <div class = 'row'>
        <div class="center-align">
            <form action = '' method = 'get'>
                    <table class="highlight centered responsive-table">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Preço</th>
                                <th>Adicionar</th>
                            </tr>
                        </thead>
                        <?php
                            $_SESSION['adm'] = "Janaina"; 

                            echo "
                                <h5 class ='light'>Olá <strong>$_SESSION[adm]</strong>, você está realizando o pedido do cliente: <strong style='color: green'>$_SESSION[cliente]</strong> </h5>

                                </br>
                            ";

                            $query = 'SELECT id_produto, nome, preco FROM produtos';
                            $execut = mysqli_query($conexao,$query);
                            
                            while($produto = mysqli_fetch_array($execut)){
                                //var_dump($produto);
                                echo "
                                    <tbody>
                                        <tr>
                                            <td>$produto[nome]</td>
                                            <td>$produto[preco]</td>
                                            <td>
                                                <a href='?add=$produto[id_produto]'><img id='carrinho' src='../css/carrinho.svg' alt='carrinho de compras'></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                ";
                            }  
                        ?>
                    </table>
            </form>
        </div>
    </div>
    </br>
    <div class='input-field col s12'> 
        <button type = 'submit' class=' waves-effect waves-green btn green'>Finalizar</button>
        <a href='../cliente/clientes.php' class='btn waves-effect waves light red'>Voltar</a>
    <div>
    <?php
        if (isset($_GET['add'])) {
           
            echo "<script>alert('Produto adicionado ao carrinho!')</script>";
        }
    ?>    
</body>
<!--JavaScript at end of body for optimized loading-->
    <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
    <script>M.AutoInit();</script>
</html>