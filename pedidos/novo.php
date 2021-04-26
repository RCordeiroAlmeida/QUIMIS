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
            <form action = 'detalhes.php' method = 'POST'>
                    <table class="highlight centered responsive-table">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Preço</th>
                                <th>Quantidade</th>
                                <th>Adicionar</th>
                            </tr>
                        </thead>
                        <?php
                            require_once '../banco/conexao.php';
                            //var_dump($_POST);

                            session_start();
                            $_SESSION['adm'] = "Janaina";
                            $_SESSION['id_cliente'] = $_POST['id_cliente'];
                            $_SESSION['cliente'] = $_POST['nome'];

                            echo "
                                <h5 class ='light'>Olá <strong>$_SESSION[adm]</strong>, você está realizando o pedido de: <strong style='color: green'>$_SESSION[nome]</strong> </h5>

                                </br>
                            ";

                            $query = 'SELECT id_produto, nome, preco FROM produtos';
                            $execut = mysqli_query($conexao,$query);
                            
                            while($produto = mysqli_fetch_array($execut)){
                                echo "
                                    <tbody>
                                        <tr>
                                            <td>$produto[nome]</td>
                                            <td>$produto[preco]</td>
                                            <td>
                                                <select class = 'browser-default' name= 'qtdd'>
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
                                                    <option value='31'>31</option>
                                                    <option value='32'>32</option>
                                                    <option value='33'>33</option>
                                                    <option value='34'>34</option>
                                                    <option value='35'>35</option>
                                                    <option value='36'>36</option>
                                                    <option value='37'>37</option>
                                                    <option value='38'>38</option>
                                                    <option value='39'>39</option>
                                                    <option value='40'>40</option>
                                                    <option value='41'>41</option>
                                                    <option value='42'>42</option>
                                                    <option value='43'>43</option>
                                                    <option value='44'>44</option>
                                                    <option value='45'>45</option>
                                                    <option value='46'>46</option>
                                                    <option value='47'>47</option>
                                                    <option value='48'>48</option>
                                                    <option value='49'>49</option>
                                                    <option value='50'>50</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type = 'hidden' name='id_produto' value='$produto[id_produto]'/>
                                                <button type= 'submit'><img src='../css/carrinho.svg' alt='carrinho de compras'></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                ";
                            }  
                        ?>
                    </table>
                    <?php
                        echo "
                            </br>
                            <div class='input field col s12'>
                                <button type = 'submit' class='waves-effect waves-green btn-flat'>Finalizar</button>
                                <a href='../cliente/clientes.php' class='waves-effect waves-green btn-flat'><i class='material-icons left'>arrow_back</i>Voltar</a>
                            <div>           
                        ";
                    
                    ?>
            </form>
        </div>
    </div>
</body>
<!--JavaScript at end of body for optimized loading-->
    <script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
    <script>M.AutoInit();</script>
</html>