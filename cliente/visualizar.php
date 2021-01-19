<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!--Import Google Icon Font-->
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <!--Import materialize.css-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
    <title>Visualização de Cliente</title>
</head>
<body>

    <?php
        require_once '../banco/conexao.php';
        //print_r($_POST);

        $id = $_POST['id_cliente'];
        //echo $id;

        $query = "SELECT * FROM cliente WHERE id_cliente=$id";
        //echo $query;
        $resultado_busca = mysqli_query($conexao, $query);
        $row = mysqli_num_rows($resultado_busca);
        if($row > 0){
            while($rows_busca = mysqli_fetch_array($resultado_busca)){
                //var_dump($rows_busca);exit;
                $id = $rows_busca['id_cliente'];
                $nome = $rows_busca['nome'];
                $cnpj = $rows_busca['cnpj'];
                $ie = $rows_busca['ie'];
                $tel = $rows_busca['telefone'];
                $cel = $rows_busca['celular'];
                $email = $rows_busca['email'];
                $cep = $rows_busca['cep'];
                $log = $rows_busca['logradouro'];
                $num = $rows_busca['numero'];
                $comp = $rows_busca['complemento'];
                $bairro = $rows_busca['bairro'];
                $cidade = $rows_busca['cidade'];
                $uf = $rows_busca['UF'];

                echo "
                    <div class='row'>
                    <div class='col s12 m6 push-m3 '>
                        <h3 class='light'>Visualizar dados do cliente</h3>
                        <form action = '../saveEdit.php' method = 'POST'>
                            <div class='input-field col s12'>
                                <label for='nome'>Nome</label>
                                <input type='text' name='nome' id='nome' maxlength = '50' value='$nome' disabled='disabled'>
                            </div>
                            <div class='input-field col s12'>
                                <label for='cnpj'>CNPJ</label>
                                <input type='text' name='cnpj' id='cnpj' maxlength = '18' value='$cnpj' disabled='disabled'>
                            </div>
                            <div class='input-field col s12'>
                                <label for='ie'>Inscrição Estadual</label>
                                <input type='text' name='ie' id='ie' maxlength='17' value = '$ie' disabled='disabled'>
                            </div>
                            <div class='input-field col s12'>
                                <label for='telefone'>Telefone</label>
                                <input type='text' name='telefone' id='telefone'  maxlength='14' value='$tel' disabled='disabled'>
                            </div>
                            <div class='input-field col s12'>
                                <label for='celular'>Celular</label>
                                <input type='text' name='celular' id='celular'  maxlength='15' value = '$cel' disabled='disabled'>
                            </div>
                            <div class='input-field col s12'>
                                <label for='email'>E-mail</label>
                                <input type='text' name='email' id='email' value = '$email' disabled='disabled'>
                            </div>
                            <div class='input-field col s12'> 
                                <label for ='cep'>CEP</label>
                                <input name='cep' type='text' id='cep' value = '$cep' maxlength='9'
                                    onblur='pesquisacep(this.value)'; disabled='disabled'/>
                            </div>
                            <div class='input-field col s12'> 
                                <label for = 'logradouro'>Rua</label>
                                <input name='logradouro' type='text' id='logradouro' placeholder='Rua' value='$log' disabled='disabled'/>
                            </div>
                            <div class='input-field col s12'>   
                                <label for='numero'>Número</label>
                                <input type='text' name='numero' id='numero'  maxlength='10' value='$num' disabled='disabled'/>
                            </div>
                            <div class='input-field col s12'>   
                                <label for='complemento'>Complemento</label>
                                <input type='text' name='complemento' id='complemento' maxlength = '30' value='$comp 'disabled='disabled'/>
                            </div>
                            <div class='input-field col s12'>
                                <label for = 'bairro'>Bairro</label> 
                                <input name='bairro' type='text' id='bairro' placeholder='Bairro' value = '$bairro' disabled='disabled'/>
                            </div>
                            <div class='input-field col s12'> 
                                <label for ='cidade'>Cidade</label>
                                <input name='cidade' type='text' id='cidade' placeholder='Cidade' value='$cidade' disabled='disabled'/>
                            </div>
                            <div class='input-field col s12'>
                            <label for='uf'>Estado</label></br></br>
                                <select class='browser-default' id='uf' name = 'uf' disabled='disabled'>
                                <option value='$uf'>$uf</option>
                                </select>
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
