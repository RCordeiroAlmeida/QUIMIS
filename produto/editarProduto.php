<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!--Import Google Icon Font-->
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <!--Import materialize.css-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
    <title>Editar Produto</title>
</head>
<body>

    <?php
        require_once '../banco/conexao.php';
        //print_r($_POST);

        $id = $_POST['id_produto'];
        //echo $id;

        $query = "SELECT * FROM produtos WHERE id_produto=$id";
        //echo $query;exit;
        $resultado_busca = mysqli_query($conexao, $query);
        $row = mysqli_num_rows($resultado_busca);
        if($row > 0){
            while($dados = mysqli_fetch_array($resultado_busca)){
                //var_dump($rows_busca);exit;
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
                            <h3 class='light'>Editar dados do produto</h3>
                            <form action='saveEdit.php' method='POST'>
                                <div class='input-field col s12'>
                                    <label for='nome'>Nome</label>
                                    <input type='text' name='nome' id='nome' value = '$nome' required/>
                                </div>
                                <div class='input-field col s12'>
                                    <label for='descricaoProd'>Descrição do produto</label>
                                    <textarea id='descricaoProd' name = 'descricaoProd' class='materialize-textarea'>$desc</textarea>
                                </div>
                                <div class='input-field col s12'>
                                    <label for='formula'>Fórmula</label>
                                    <textarea id='formula' name= 'formula' class='materialize-textarea'>$form</textarea>
                                </div>
                                <div class='input-field col s12'>
                                    <label for='estoqueMin'>Estoque mínimo</label>
                                    <input type='text' name='estoqueMin' id='estoqueMin' value='$estoq'/>
                                </div>
                                <div class='input-field col s12'>
                                    <label for='unidadeMed'>Unidade media</label>
                                    <input type='text' name='unidadeMed' id='unidadeMed' value='$uni'/>
                                </div>
                                <div class='input-field col s12'>
                                    <label for='fornecedor'>Fornecedor</label>
                                    <input type='text' name='fornecedor' id='fornecedor' value='$fornecedor'/>
                                </div>
                                <div class='input-field col s12'>
                                    <label for='fabricante'>Fabricante</label>
                                    <input type='text' name='fabricante' id='fabricante' value='$fab'/>
                                </div>
                                <div class='input-field col s12'>
                                    <label for='precoMed'>Preço médio</label>
                                    <input type='text' name='precoMed' id='precoMed' value='$preco'/>
                                </div>
                                <div class='input-field col s12'>
                                    <label for='lote'>Lote</label>
                                    <input type='text' name='lote' id='lote' value='$lote'>
                                </div>
                                <div class='input-field col s12'>
                                    <label for='descricaoTec'>Descrição técnica</label>
                                    <textarea id='descricaoTec' name = 'descricaoTec' class='materialize-textarea'>$desctec</textarea>
                                </div>
                                <div class='input-field col s12'>
                                    <label for='obs'>Observação</label>
                                    <textarea id='obs' name = 'obs' class='materialize-textarea'>$obs</textarea>
                                </div>
                                <div class='input-field col s12'>
                                    <input type = 'hidden' name = 'id_produto' value = '$id'/>
                                    <button type='submit' class='btn waves-effect waves-light'><i class='material-icons left'>edit</i>Salvar alterações</button>
                                    <a href='../estoque/gerenciarEstoque.php' class=' btn waves-effect waves light red'><i class='material-icons left'>arrow_back</i>Voltar</a>
                                </div>
                            </form>
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
