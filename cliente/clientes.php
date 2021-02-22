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
        </div>
    </div>
    <div class='row'>
        <table class='highlight centered responsive-table'>
            <thead>
                <tr>
                    <th>Visualizar</th>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>Editar</th>
                    <th>Pedido</th>
                    <th>Excluir</th>
                </tr>
            </thead>

            <?php
                require_once '../banco/conexao.php';
                $query = "SELECT * FROM cliente ORDER BY nome ASC";
                $execut = mysqli_query($conexao,$query);
                
                while ($dados = mysqli_fetch_array($execut)){
                    $id = $dados['id_cliente'];
                    $nome = $dados['nome'];
                    $cnpj = $dados['cnpj'];

                    echo"   
                        <tbody id = 'myTable'>
                            <tr>
                                <td>
                                    <form action='visualizarCliente.php' method='POST'>
                                        <input type = 'hidden' name = 'id_cliente' value = '$id'/>
                                        <button type='submit' class='btn waves-effect waves-light blue'><i class='material-icons'>remove_red_eye</i></button>
                                    </form>
                                </td>
                                <td>$nome</td>
                                <td>$cnpj</td>
                                <td>
                                    <form action = 'editarCliente.php' method = 'POST'>
                                        <input type = 'hidden' name = 'id_cliente' value = '$id'/>
                                        <button type='submit' class='btn waves-effect waves-light orange darken'><i class='material-icons'>edit</i></button>
                                    </form>
                                </td>
                                <td>
                                    <form action = '../pedidos/novo.php' method = 'POST'>
                                        <input type = 'hidden' name = 'id_cliente' value = '$id'/>
                                        <input type = 'hidden' name = 'nome' value = '$nome'/>
                                        <button type='submit' class='btn waves-effect waves-light green'><i class='material-icons'>assignment</i></button>
                                    </form>
                                </td>
                                <td>
                                    <div>
                                        <button data-target='modal1' class='btn modal-trigger waves-effect waves-light red'><i class='material-icons'>delete</i></button>
                                    </div>
                                    <div id='modal1' class='modal'>
                                        <div class='modal-content'>
                                            <h3>ATENÇÃO</h3>
                                            <h6>Clicando no botão abaixo, você concorda em excluir permanentemente os dados desse cliente</h6>
                                        </div>
                                        <div class='modal-footer'>
                                            <form action = 'excluirCliente.php' method = 'POST'/>
                                                <input type = 'hidden' name = 'id_cliente' value = '$id'/>
                                                <button type = 'submit' class='modal-close waves-effect waves-green btn-flat'>Concordar e continuar</button>
                                                <a href='clientes.php' class='modal-close waves-effect waves-green btn-flat'>Cancelar</a>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>       
                    ";
                }
            ?>
        </table>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>M.AutoInit();</script>
</body>
</html>


