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
                        $random = rand();
                        //$verif = $random;
                        echo $random." Essa é a variável random!<br/>";
                        //echo $verif." Essa é a variável verif!<br/>";

                        session_start();
                        $_SESSION['id_cliente'] = $_POST['id_cliente'];
                        $_SESSION['nome'] = $_POST['nome'];

                        //echo $_SESSION['id_cliente'].$_SESSION['nome'];

                        echo "Olá Janaina, você está realizando o pedido do(a) cliente: ".$_SESSION['nome'];

                        $query = 'SELECT * FROM produtos';
                        //echo $query;
                        $execut = mysqli_query($conexao,$query);
                        
                        while($dados = mysqli_fetch_array($execut)){
                            //var_dump($dados);exit;
                            $id_prod = $dados['id_produto'];
                            $id_pedido = $random;
                            $nproduto = $dados['nome'];
                            $preço = $dados['precoMed'];
                            
                            echo "
                                <tbody>
                                    <tr>
                                        <td>$nproduto</td>
                                        <td>$preço</td>
                                        <td>
                                                <input type = 'checkbox' name='$id_prod'/>
                                        </td>
                                        <td>
                                            <select class='browser-default' id='quant' name = 'quant'>
                                                <option value='' disabled selected>0</option>
                                                <option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>
                                                <option value='6'>6</option>
                                                <option value='7'>7</option>
                                                <option value='8'>8</option>
                                                <option value='9'>9</option>
                                                <option value='10'>10</option>
                                                <option value='11'>11</option>
                                                <option value='12'>12</option>
                                                <option value='13'>13</option>
                                                <option value='14'>14</option>
                                                <option value='15'>15</option>
                                                <option value='16'>16</option>
                                                <option value='17'>17</option>
                                                <option value='18'>18</option>
                                                <option value='19'>19</option>
                                                <option value='20'>20</option>
                                                <option value='21'>21</option>
                                                <option value='22'>22</option>
                                                <option value='23'>23</option>
                                                <option value='24'>24</option>
                                                <option value='25'>25</option>
                                                <option value='26'>26</option>
                                                <option value='27'>27</option>
                                                <option value='28'>28</option>
                                                <option value='29'>29</option>
                                                <option value='30'>30</option>
                                            </select>
                                            </td>
                                    </tr>
                                </tbody>
                            ";
                        }  
                    ?>
                </table>
                <?php
                    echo "
                    <input type = 'hidden' name = 'id_pedido' value= '$random'/>
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