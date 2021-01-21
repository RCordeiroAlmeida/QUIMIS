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
    <link rel="stylesheet" href="../css/gerenciaEstoq.css">
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
    <title>Estoque - QUIMIS</title>
</head>
<body>
    <div class="row">
        <div class="center-align">
            <h3 class="light">Gerenciar Estoque</h3></br></br>
                <div class="col s12 m6 push-m3 ">
                    <input type="text" name="busca" id="busca" placeholder="Buscar produto cadastrado pelo nome">
                    <a href="../produto/cadastrarProd.php" class="btn-floating  btn-large waves-effect waves-light green"><i class="material-icons">add</i></a>
                    <a href="../index.php" class="btn-floating btn-large waves-effect waves light green"><i class="material-icons">arrow_back</i></a>
                </div>
        </div>
    </div>
    <div class='row'>
        <table class="highlight stripped centered responsive-table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Lote</th>
                    <th>Estoque</th>
                    <th>Visualizar</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>

            <?php
                require_once '../banco/conexao.php';
                $query = "SELECT * FROM produtos ORDER BY nome ASC";
                $execut = mysqli_query($conexao,$query);

                while($dados = mysqli_fetch_array($execut)){
                    $id = $dados['id_produto'];
                    $nome = $dados['nome'];
                    $estoq = $dados['estoqueMin'];
                    $lote = $dados['lote'];

                    echo " 
                        <tbody id = 'myTable'>
                            <tr>
                                <form action = '../produto/editarProduto.php' method='POST'>
                                    <td>$id</td>
                                    <td>$nome</td>
                                    <td>$lote</td>
                                    <td>$estoq</td>
                                    <td>
                                        <form action='visualizarProd.php' method='POST'>
                                            <input type = 'hidden' name = 'id_produto' value = '$id'/>
                                            <button type='submit' class='btn waves-effect waves-light blue'><i class='material-icons'>remove_red_eye</i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <input type = 'hidden' name = 'id_produto' value = '$id'/>
                                        <button type = 'submit' class = 'btn waves-effect waves-light green'><i class='material-icons'>edit</i></button>
                                    </td>
                                </form>
                                <td>
                                    <div>
                                        <a class='waves-effect waves-light red btn modal-trigger' href='#modal1'><i class='material-icons'>delete</i></a>
                                    </div>
                                    <div id='modal1' class='modal'>
                                        <div class='modal-content'>
                                            <h3>ATENÇÃO</h3>
                                            <h5>Clicando no botão abaixo, você concorda em excluir permanentemente os dados desse produto</h5>
                                        </div>
                                        <div class='modal-footer'>
                                            <form action = '../produto/excluirProduto.php' method = 'POST'/>
                                                <input type = 'hidden' name = 'id_produto' value = '$id'/>
                                                <button type = 'submit' class='modal-close waves-effect waves-green btn-flat'>Concordar e continuar</button>
                                                <a href='gerenciarEstoque.php' class='modal-close waves-effect waves-red btn-flat'>Cancelar</a>
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
    <scrip src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></scrip>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>M.AutoInit();</script>
</body>
</html>