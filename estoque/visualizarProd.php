<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!--Import Google Icon Font-->
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <!--Import materialize.css-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
    <title>Visualizar Produto</title>
</head>
<body>

    <?php
        require_once '../banco/conexao.php';
        //print_r($_POST);

        $id = $_POST['id_produto'];
        //echo $id;

        $query = "SELECT * FROM produtos WHERE id_produto = $id";
        //echo $query;
        $resultado_busca = mysqli_query($conexao, $query);
        $row = mysqli_num_rows($resultado_busca);
        if($row > 0){
            while($dados = mysqli_fetch_array($resultado_busca)){
                //var_dump($dados);exit;
                $id = $dados['id_produto'];
                $nome = $dados['nome'];
                $desc = $dados['descricaoProd'];
                $form = $dados['formula'];
                $estoq = $dados['estoque'];
                $uni = $dados ['unidadeMed'];
                $fornecedor = $dados['fornecedor'];
                $fab = $dados['Fabricante'];
                $preco = $dados['preco'];
                $lote = $dados['lote'];
                $desctec = $dados['descricaoTec'];
                $obs = $dados['obs'];

                echo "
                    <div class='row'>
                        <div class='col s12 m6 push-m3 '>
                            <h3 class='light'>Visualizar dados do Produto</h3>
                            <form action = '../saveEdit.php' method = 'POST'>
                                <div class='input-field col s12'>
                                    <label for ='id'>Código</label>
                                    <input type='text' name='id' id='id' value='$id' disabled='disabled'>
                                </div>
                                <div class='input-field col s12'>
                                    <label for='nome'>Nome</label>
                                    <input type='text' name='nome' id='nome' maxlength = '50' value='$nome' disabled='disabled'>
                                </div>
                                <div class='input-field col s12'>
                                    <label for ='desc'>Descrição do produto</label>
                                    <input type='text' name='desc' id='desc' value='$desc' disabled='disabled'>
                                </div>
                                <div class='input-field col s12'>
                                    <label for ='form'>Fórmula</label>
                                    <input type='text' name='form' id='form' value='$form' disabled='disabled'>
                                </div>
                                <div class='input-field col s12'>
                                    <label for ='estoq'>Estoque mínimo</label>
                                    <input type='text' name='estoq' id='estoq' value='$estoq' disabled='disabled'>
                                </div>
                                <div class='input-field col s12'>
                                    <label for ='uni'>Unidade média</label>
                                    <input type='text' name='uni' id='uni' value='$uni' disabled='disabled'>
                                </div>
                                <div class='input-field col s12'>
                                    <label for ='fornecedor'>Fornecedor</label>
                                    <input type='text' name='fornecedor' id='fornecedor' value='$fornecedor' disabled='disabled'>
                                </div>
                                <div class='input-field col s12'>
                                    <label for ='fab'>Fabricante</label>
                                    <input type='text' name='fab' id='fab' value='$fab' disabled='disabled'>
                                </div>
                                <div class='input-field col s12'>
                                    <label for ='preco'>Preço médio</label>
                                    <input type='text' name='preco' id='preco' value='$preco' disabled='disabled'>
                                </div>
                                <div class='input-field col s12'>
                                    <label for ='lote'>Lote</label>
                                    <input type='text' name='lote' id='lote' value='$lote' disabled='disabled'>
                                </div>
                                <div class='input-field col s12'>
                                    <label for ='desctec'>Descrição técnica</label>
                                    <input type='text' name='desctec' id='desctec' value='$desctec' disabled='disabled'>
                                </div>
                                <div class='input-field col s12'>
                                    <label for ='obs'>Observação</label>
                                    <input type='text' name='obs' id='obs' value='$obs' disabled='disabled'>
                                </div>

                            </form>

                            <a href='gerenciarEstoque.php' class=' btn waves-effect waves light red'><i class='material-icons left'>arrow_back</i>Voltar</a>
                        </div>
                    </div>
                    ";

            }
        }
    ?>
    <!--JavaScript at end of body for optimized loading-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
    <script src='https://code.jquery.com/jquery-3.0.0.min.js'></script>
    <script> M.AutoInit();</script>
</body>
</html>
