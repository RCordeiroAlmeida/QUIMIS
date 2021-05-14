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
            <?php  
                require_once "../banco/conexao.php";

                $query = 'SELECT id_produto, nome, preco FROM produtos';
                $execut = mysqli_query($conexao,$query);
                $produto = mysqli_fetch_array($execut);

                print_r($produto);

                /* while($produto = mysqli_fetch_array($execut)){
                    //var_dump($produto);
                        echo "
                            <tbody>
                                <tr>
                                    <td>$produto[nome]</td>
                                    <td>$produto[preco]</td>    
                                    </td>
                                    <td>
                                        <button type= 'submit' name='id' value='$produto[id_produto]'><img src='../css/carrinho.svg' alt='carrinho de compras'></button>
                                    </td>
                                </tr>
                            </tbody>
                        ";
                }   */
            ?>
        </div>
    </div>
            
    </body  >
<!--JavaScript at end of body for optimized loading-->
    <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
    <script>M.AutoInit();</script>
</html>