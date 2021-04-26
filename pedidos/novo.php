<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Novo pedido</title>
</head>
<body>
    <div class = 'row'>
        <form action = 'detalhes.php' method = 'POST'>
                <table>
                    <thead>
                        <tr>
                            <th>Produto</th>
                            <th>Preço</th>
                            <th>Selecionar</th>
                            <th>Quantidade</th>
                        </tr>
                    </thead>
                    <?php
                        require_once '../banco/conexao.php';
                        //var_dump($_POST);

                        session_start();
                        $_SESSION['adm'] = "Janaina";
                        $_SESSION['id_cliente'] = $_POST['id_cliente'];
                        $_SESSION['cliente'] = $_POST['nome'];

                        //echo $_SESSION['id_cliente'].$_SESSION['nome'];

                        echo "Olá $_SESSION[adm], você está realizando o pedido do(a) cliente: ".$_SESSION['cliente'];

                        $query = 'SELECT * FROM produtos';
                        //echo $query;
                        $execut = mysqli_query($conexao,$query);
                        
                        while($produto = mysqli_fetch_array($execut)){
                            echo "
                                <tbody>
                                    <tr>
                                        <td>$produto[nome]</td>
                                        <td>$produto[precoMed]</td>
                                        <td>
                                            <input type = 'checkbox' name='$produto[nome]'/>
                                        </td>
                                        <td>
                                           <input type='number' name='quantidade'/>
                                        </td>
                                    </tr>
                                </tbody>
                            ";
                        }  
                    ?>
                </table>
                <?php
                    echo "
                    <button type = 'submit' class='waves-effect waves-green btn-flat'>Finalizar pedido</button>
                    <a href='../cliente/clientes.php' class='waves-effect waves-green btn-flat'>Voltar</a>            
                    ";
                
                ?>
        </form>
    </div>
</body>
<!--JavaScript at end of body for optimized loading-->
    <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
    <script>M.AutoInit();</script
</html>