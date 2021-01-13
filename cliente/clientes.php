<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#busca").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
<title>Clientes - QUIMIS</title>
</head>
<body>
    <div class="row">
        <div class="center-align">
            <h3 class="light">Buscar clientes cadastrados</h3></br></br>
                <div class="col s12 m6 push-m3 ">
                    <input type="text" name="busca" id="busca" placeholder="Digite aqui para buscar clientes cadastrados pelo nome">
                    <a href="cadastrarCliente.php" class="btn-floating  btn-large waves-effect waves-light orange darken"><i class="material-icons">add</i></a>
                    <a href="../index.php" class="btn-floating btn-large waves-effect waves light orange darken"><i class="material-icons">arrow_back</i></a>
                </div>
            </form>
        </div>
    </div>

    <?php
        require_once '../banco/conexao.php';
        $query = "SELECT * FROM cliente ORDER BY nome ASC";
        $execut = mysqli_query($conexao,$query);

        echo "  
                <div class='row'>
                      
                        <table>
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>CNPJ</th>
                                    <th>Inscrição Estadual</th>
                                    <th>Telefone</th>
                                    <th>Celular</th>
                                    <th>Email</th>
                                    <th>CEP</th>
                                    <th>Logradouro</th>
                                    <th>Número</th>
                                    <th>Complemento</th>
                                    <th>Bairro</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    <th>Editar</th>
                                    <th>Excluir</th>
                                    <th>Pedido</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            ";
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

            echo"   <div class='row'>
                        
                            <table class = 'striped'>
                                <tbody id = 'myTable'>
                                    <tr>
                                        <form action = 'editarCliente.php' method = 'POST'>
                                            <td>$nome</td>
                                            <td>$cnpj</td>
                                            <td>$ie</td>
                                            <td>$tel</td>
                                            <td>$cel</td>
                                            <td>$email</td>
                                            <td>$cep</td>
                                            <td>$log</td>
                                            <td>$num</td>
                                            <td>$comp</td>
                                            <td>$bairro</td>
                                            <td>$cidade</td>
                                            <td>$uf</td>
                                            <td>
                                                <input type = 'hidden' name = 'id_cliente' value = '$id'/>
                                                <button type='submit' class='btn waves-effect waves-light blue'><i class='material-icons'>edit</i></button>
                                            </td>
                                        </form>
                                        <td>
                                            <form action = '../pedidos/novoPedido.php' method = 'POST'>
                                                <input type = 'hidden' name = 'id_cliente' value = '$id'/>
                                                    <button type='submit' class='btn waves-effect waves-light green'><i class='material-icons'>assignment</i></button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action = 'excluirCliente.php' method = POST>
                                                <input type = 'hidden' name = 'id_cliente' value = '$id'/>
                                                <a class='waves-effect waves-light btn modal-trigger' href='#modal1'><i class='material-icons'>delete</i></a>
                                            </form>
                                            <div id='modal1' class='modal'>
                                                <div class='modal-content'>
                                                    <h4>ATENÇÃO</h4>
                                                        <p>Clicando no botão abaixo, você concorda em excluir permanentemente os dados desse cliente</p>
                                                </div>
                                                <div class='modal-footer'>
                                                    <a href='#!' class='modal-close waves-effect waves-green btn-flat'>Concordar e continuar</a>
                                                    <a href='#!' class='modal-close waves-effect waves-green btn-flat'>Cancelar</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table> 
                        </div>
                    </div>           
            ";
        }
    ?>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>M.AutoInit();</script>
</body>
</html>


