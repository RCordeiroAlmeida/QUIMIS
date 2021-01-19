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

        $query = "SELECT * FROM produtos WHERE id_produto=$id";
        //echo $query;
        $resultado_busca = mysqli_query($conexao, $query);
        $row = mysqli_num_rows($resultado_busca);
        if($row > 0){
            while($dados = mysqli_fetch_array($resultado_busca)){
                //var_dump($dados);exit;
                $id = $dados['id_produto'];
                $nome = $dados['nome'];
                $descricaoProd = $dados['descricaoProd'];
                $formula = $dados['formula'];
                $estoqueMin = $dados['estoqueMin'];
                $unidadeMed = $dados['unidadeMed'];
                $fornecedor = $dados['fornecedor'];
                $fabricante = $dados['fabricante'];
                $precoMed = $dados['precoMed'];
                $lote = $dados['lote'];
                $descricaoTec = $dados['descricaoTec'];
                $obs = $dados['obs'];

                echo "
                    <div class='row'>
                    <div class='col s12 m6 push-m3 '>
                        <h3 class='light'>Visualizar dados do Produto</h3>
                        <form action = '../saveEdit.php' method = 'POST'>
                        </div>
                            <div class='input-field col s12'>
                                <label for ='id'></label>
                                <input type='text' name='id' id='id' value='$id' disabled='disabled'>
                            </div>
                            <div class='input-field col s12'>
                                <label for='nome'>Nome</label>
                                <input type='text' name='nome' id='nome' maxlength = '50' value='$nome' disabled='disabled'>
                            </div>
                            <div class='input-field col s12'>
                                <label for ='descricaoProd'></label>
                                <input type='text' name='descricaoProd' id='descricaoProd' value='$descricaoProd' disabled='disabled'>
                            </div>
                            </div>
                            <div class='input-field col s12'>
                                <label for ='formula'></label>
                                <input type='text' name='formula' id='formula' value='$formula' disabled='disabled'>
                            </div>
                            </div>
                            <div class='input-field col s12'>
                                <label for ='estoqueMin'></label>
                                <input type='text' name='estoqueMin' id='estoqueMin' value='$estoqueMin' disabled='disabled'>
                            </div>
                            </div>
                            <div class='input-field col s12'>
                                <label for ='unidadeMed'></label>
                                <input type='text' name='unidadeMed' id='unidadeMed' value='$unidadeMed' disabled='disabled'>
                            </div>
                            </div>
                            <div class='input-field col s12'>
                                <label for ='fornecedor'></label>
                                <input type='text' name='fornecedor' id='fornecedor' value='$fornecedor' disabled='disabled'>
                            </div>
                            </div>
                            <div class='input-field col s12'>
                                <label for =''></label>
                                <input type='text' name='fabricante' id='fabricante' value='$fabricante' disabled='disabled'>
                            </div>
                            </div>
                            <div class='input-field col s12'>
                                <label for ='precoMed'></label>
                                <input type='text' name='precoMed' id='precoMed' value='$precoMed' disabled='disabled'>
                            </div>
                            </div>
                            <div class='input-field col s12'>
                                <label for ='lote'></label>
                                <input type='text' name='lote' id='lote' value='$lote' disabled='disabled'>
                            </div>
                            </div>
                            <div class='input-field col s12'>
                                <label for ='descricaoTec'></label>
                                <input type='text' name='descricaoTec' id='descricaoTec' value='$descricaoTec' disabled='disabled'>
                            </div>
                            </div>
                            <div class='input-field col s12'>
                                <label for ='obs'></label>
                                <input type='text' name='obs' id='obs' value='$obs' disabled='disabled'>
                            </div>

                        </form>
                        <a href='clientes.php' class=' btn waves-effect waves light red'><i class='material-icons left'>arrow_back</i>Voltar</a>
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
