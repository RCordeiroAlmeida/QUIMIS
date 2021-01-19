<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
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
                    <a href="../produto/cadastrarProduto.php" class="btn-floating  btn-large waves-effect waves-light green"><i class="material-icons">add</i></a>
                    <a href="../index.php" class="btn-floating btn-large waves-effect waves light green"><i class="material-icons">arrow_back</i></a>
                </div>
        </div>
    </div>
    <div class='row'>
        <table class="highlight">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Fórmula</th>
                    <th>Estoque Mínimo</th>
                    <th>Unidade Média</th>
                    <th>Fornecedor</th>
                    <th>Fabricante</th>
                    <th>Preço</th>
                    <th>Lote</th>
                    <th>Descrição Tecnológica</th>
                    <th>Obs</th>
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
                    $desc = $dados['descricaoProd'];
                    $form = $dados['formula'];
                    $estoq = $dados['estoqueMin'];
                    $uni = $dados ['unidadeMed'];
                    $fornecedor = $dados['fornecedor'];
                    $fab = $dados['Fabricante'];
                    $preco = $dados['precoMed'];
                    $lote = $dados['lote'];
                    $desctec = $dados['descricaoTec'];
                    $obs = $dados['obs'];

                    echo " 
                        <tbody id = 'myTable'>
                            <tr>
                                <form action = 'editarProduto.php' method='POST'>
                                    <td>$nome</td>
                                    <td>$desc</td>
                                    <td>$form</td>
                                    <td>$estoq</td>
                                    <td>$uni</td>
                                    <td>$fornecedor</td>
                                    <td>$fab</td>
                                    <td>$preco</td>
                                    <td>$lote</td>
                                    <td>$desctec</td>
                                    <td>$obs</td>
                                    <td>
                                        <input type = 'hidden' name = 'id_produto' value = '$id'/>
                                        <button type = 'submit' class = 'btn waves-effect waves-light green'><i class='material-icons'>edit</i></button>
                                    </td>
                                </form>
                                <td>
                                    <div>
                                        <a class='waves-effect waves-light btn modal-trigger' href='#modal1'><i class='material-icons'>delete</i></a>
                                    </div>
                                    <div id='modal1' class='modal'>
                                        <div class='modal-content'>
                                            <h4>ATENÇÃO</h4>
                                            <p>Clicando no botão abaixo, você concorda em excluir permanentemente os dados desse produto</p>
                                        </div>
                                        <div class='modal-footer'>
                                            <form action = 'excluirProduto.php' method = 'POST'/>
                                                <input type = 'hidden' name = 'id_produto' value = '$id'/>
                                                <button typé = 'submit' class='modal-close waves-effect waves-green btn-flat'>Concordar e continuar</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        M.AutoInit();
    </script>
</body>

</html>