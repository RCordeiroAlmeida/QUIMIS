<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="../css/editarCliente.css">
    <!--Import Google Icon Font-->
    <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
    <!--Import materialize.css-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css'>
    <title>Editar Cliente</title>
</head>
<body>

    <?php
        require_once '../banco/conexao.php';
        //print_r($_POST);

        $id = $_POST['id_cliente'];
        //echo $id;

        $query = "SELECT * FROM cliente WHERE id_cliente=$id";
        //echo $query;exit;
        $resultado_busca = mysqli_query($conexao, $query);
        $row = mysqli_num_rows($resultado_busca);
        if($row > 0){
            while($rows_busca = mysqli_fetch_array($resultado_busca)){
                //var_dump($rows_busca);exit;
                $id = $rows_busca['id_cliente'];
                $nome = $rows_busca['nome'];
                $cnpj = $rows_busca['cnpj'];
                $ie = $rows_busca['ie'];
                $client = $rows_busca['client'];
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
                        <h3 class='light'>Editar dados do cliente</h3>
                        <form action = 'saveEdit.php' method = 'POST'>
                            <div class='input-field col s12'>
                                <label for='nome'>Nome</label>
                                <input type='text' name='nome' id='nome' maxlength = '50' value='$nome' required>
                            </div>
                            <div class='input-field col s12'>
                                <label for='cnpj'>CNPJ</label>
                                <input type='text' name='cnpj' id='cnpj' maxlength = '18' value='$cnpj' required>
                            </div>
                            <div class='input-field col s12'>
                                <label for='ie'>Inscrição Estadual</label>
                                <input type='text' name='ie' id='ie' maxlength='17' value = '$ie'>
                            </div>
                            <div class='input-field col s12'>
                                <label for='telefone'>Telefone</label>
                                <input type='text' name='telefone' id='telefone'  maxlength='14' value='$tel'>
                            </div>
                            <div class='input-field col s12'>
                                <label for='celular'>Celular</label>
                                <input type='text' name='celular' id='celular'  maxlength='15' value = '$cel'>
                            </div>
                            <div class='input-field col s12'>
                                <label for='email'>E-mail</label>
                                <input type='text' name='email' id='email' value = '$email'>
                            </div>
                            <div class='input-field col s12'> 
                                <label for ='cep'>CEP</label>
                                <input name='cep' type='text' id='cep' value = '$cep' maxlength='9'
                                    onblur='pesquisacep(this.value)'; required/>
                            </div>
                            <div class='input-field col s12'> 
                                <label for = 'logradouro'>Rua</label>
                                <input name='logradouro' type='text' id='logradouro' placeholder='Rua' value='$log' />
                            </div>
                            <div class='input-field col s12'>   
                                <label for='numero'>Número</label>
                                <input type='text' name='numero' id='numero'  maxlength='10' value='$num' required/>
                            </div>
                            <div class='input-field col s12'>   
                                <label for='complemento'>Complemento</label>
                                <input type='text' name='complemento' id='complemento' maxlength = '30' value='$comp'/>
                            </div>
                            <div class='input-field col s12'>
                                <label for = 'bairro'>Bairro</label> 
                                <input name='bairro' type='text' id='bairro' placeholder='Bairro' value = '$bairro' />
                            </div>
                            <div class='input-field col s12'> 
                                <label for ='cidade'>Cidade</label>
                                <input name='cidade' type='text' id='cidade' placeholder='Cidade' value='$cidade' />
                            </div>
                            <div class='input-field col s12'>
                            <label for='uf'>Estado</label></br></br>
                                <select class='browser-default' id='uf' name = 'uf'>
                                <option value='$uf'>$uf</option>
                                <option value='AC'>Acre</option>
                                <option value='AL'>Alagoas</option>
                                <option value='AP'>Amapá</option>
                                <option value='AM'>Amazonas</option>
                                <option value='BA'>Bahia</option>
                                <option value='CE'>Ceará</option>
                                <option value='DF'>Distrito Federal</option>
                                <option value='ES'>Espírito Santo</option>
                                <option value='GO'>Goiás</option>
                                <option value='MA'>Maranhão</option>
                                <option value='MT'>Mato Grosso</option>
                                <option value='MS'>Mato Grosso do Sul</option>
                                <option value='MG'>Minas Gerais</option>
                                <option value='PA'>Pará</option>
                                <option value='PB'>Paraíba</option>
                                <option value='PR'>Paraná</option>
                                <option value='PE'>Pernambuco</option>
                                <option value='PI'>Piauí</option>
                                <option value='RJ'>Rio de Janeiro</option>
                                <option value='RN'>Rio Grande do Norte</option>
                                <option value='RS'>Rio Grande do Sul</option>
                                <option value='RO'>Rondônia</option>
                                <option value='RR'>Roraima</option>
                                <option value='SC'>Santa Catarina</option>
                                <option value='SP'>São Paulo</option>
                                <option value='SE'>Sergipe</option>
                                <option value='TO'>Tocantins</option>
                                </select>
                            </div>
                            <div class='input-field col s12'>
                                <input type = 'hidden' name = 'id_cliente' value = '$id'/>
                                <button type='submit' class='btn waves-effect waves-light'><i class='material-icons left'>edit</i>Salvar alterações</button>
                                <a href='clientes.php' class=' btn waves-effect waves light red'><i class='material-icons left'>arrow_back</i>Voltar</a>
                            </div>
                        </form>   
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
