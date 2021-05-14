<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!---->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <title>Novo Cadastro</title>
</head>
<body>
    <div class="row">
        <div class="col s12 m6 push-m3 ">
            <h3 class="light">Novo cliente</h3>
            <h6>Todos os campos marcados com <span style="color: red">*</span> são obrigatórios.</h6>
            <form action="" method="POST">
                <div class="input-field col s12">
                    <label for="nome">Cliente <span style="color: red">*</span></label>
                    <input type="text" name="nome" id="nome" maxlength = "50" required/>
                </div>
                <div class="input-field col s12">
                    <label for="cnpj">CNPJ <span style="color: red">*</span></label>
                    <input type="text" name="cnpj" id= "cnpj" class="form-control" onkeypress="$(this).mask('00.000.000/0000-00')" required/>
                </div>
                <div class="input-field col s12">
                    <label for="ie">Inscrição Estadual</label>
                    <input type="text" name="ie" id="ie" maxlength="17">
                </div> 
                <div class="input-field col s12">   
                    <label for="telefone">Telefone</label>
                    <input type="text" name="telefone" id = "telefone" class="form-control" onkeypress="$(this).mask('(00) 0000-0000')">
                </div>
                <div class="input-field col s12">   
                    <label for="celular">Celular <span style="color: red">*</span></label>
                    <input type="text" name="celular" id="celular" class="form-control" onkeypress="$(this).mask('(00) 00000-0000')" required/>
                </div>
                <div class="input-field col s12">   
                    <label for="email">E-mail <span style="color: red">*</span></label>
                    <input type="email" name="email" id="email" class= "validate" required/>
                </div>
                <script>
        
                    function limpa_formulário_cep() {
                            //Limpa valores do formulário de cep.
                            document.getElementById('rua').value=("");
                            document.getElementById('bairro').value=("");
                            document.getElementById('cidade').value=("");
                            document.getElementById('uf').value=("");
                    }

                    function meu_callback(conteudo) {
                        if (!("erro" in conteudo)) {
                            //Atualiza os campos com os valores.
                            document.getElementById('rua').value=(conteudo.logradouro);
                            document.getElementById('bairro').value=(conteudo.bairro);
                            document.getElementById('cidade').value=(conteudo.localidade);
                            document.getElementById('uf').value=(conteudo.uf);
                        } //end if.
                        else {
                            //CEP não Encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    }
                        
                    function pesquisacep(valor) {

                        //Nova variável "cep" somente com dígitos.
                        var cep = valor.replace(/\D/g, '');

                        //Verifica se campo cep possui valor informado.
                        if (cep != "") {

                            //Expressão regular para validar o CEP.
                            var validacep = /^[0-9]{8}$/;

                            //Valida o formato do CEP.
                            if(validacep.test(cep)) {

                                //Preenche os campos com "..." enquanto consulta webservice.
                                document.getElementById('rua').value="...";
                                document.getElementById('bairro').value="...";
                                document.getElementById('cidade').value="...";
                                document.getElementById('uf').value="...";

                                //Cria um elemento javascript.
                                var script = document.createElement('script');

                                //Sincroniza com o callback.
                                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                                //Insere script no documento e carrega o conteúdo.
                                document.body.appendChild(script);

                                $("#numero").focus();

                            } //end if.
                            else {
                                //cep é inválido.
                                limpa_formulário_cep();
                                alert("Formato de CEP inválido.");
                            }
                        } //end if.
                        else {
                            //cep sem valor, limpa formulário.
                            limpa_formulário_cep();
                        }
                    };

                </script>
                <div class="input-field col s12"> 
                    <label for ="cep">CEP <span style="color: red">*</span></label>
                    <input name="cep" type="text" id="cep" value = "" maxlength="9" onblur="pesquisacep(this.value).mask('00000-000');" required/>
                </div>
                <div class="input-field col s12"> 
                    <input name="rua" type="text" id="rua" placeholder="Rua" readonly/>
                </div>
                <div class="input-field col s12">   
                    <label for="numero">Número <span style="color: red">*</span></label>
                    <input type="text" name="numero" id="numero"  maxlength="10" required/>
                </div>
                <div class="input-field col s12">   
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" id="complemento" maxlength = "30">
                </div>
                <div class="input-field col s12"> 
                    <input name="bairro" type="text" id="bairro" placeholder="Bairro" readonly/>
                </div>
                <div class="input-field col s12"> 
                    <input name="cidade" type="text" id="cidade" placeholder="Cidade" readonly />
                </div>
                <div class="input-field col s12">
                    <label for="uf">Estado <span style="color: red">*</span> </label></br></br>
                        <select class='browser-default' id='uf' name = 'uf' required>
                            <option value="" disabled selected>Selecione um estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                </div>
                <button type="submit" name='submit' class="btn blue"><i class='material-icons left'>send</i>Cadastrar</button>
                <a href="../cliente/clientes.php" button type="submit" class="btn green"><i class='material-icons left'>arrow_back</i>Voltar</a>
            </form>
        </div>
    </div>
    <?php
        require_once "../banco/conexao.php";
        require_once "../scripts/notNull.php";
        error_reporting(E_ERROR | E_WARNING | E_PARSE); 

        if(isset($_POST['submit'])){
            $cliente = $_POST['nome']; 
            $cnpj = $_POST['cnpj']; 
            $ie = $_POST['ie'];
            $tel = $_POST['telefone'];
            $cel = $_POST['celular']; 
            $email = $_POST['email'];
            $cep = $_POST['cep'];
            $rua = $_POST['rua'];
            $num = $_POST['numero'];
            $comp = $_POST['complemento']; 
            $bairro = $_POST['bairro'];
            $city = $_POST['cidade']; 
            $estado = $_POST['uf'];

            $input = array(
                0 => $cliente,
                1 => $cnpj,
                2 => $email,
                3 => $cel,
                4 => $email,
                5 => $cep,
                6 => $estado
            );

            //var_dump($input);exit;
            if(isset($cliente) && isset($cnpj) && isset($email))
            if (notNull($input)) {
                echo"
                    <script>
                        alert('Algum campo obrigatório está vazio. Por favor verifique e tente novamente');
                    </script>
                ";
            }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                echo"
                    <script>
                        alert('Por favor, digite um e-mail valido');
                    </script>
                ";
            }else{
                $querycheck = "SELECT cnpj FROM cliente WHERE cnpj='$cnpj'";
                //echo $querycheck;exit;
                $clientes = mysqli_query($conexao,$querycheck);
                $igual = mysqli_num_rows($clientes);
            
                if ($igual==1) {
                    echo "
                        <script>
                            alert('Esse CNPJ já está registrado no sistema!');
                        </script>
                    ";exit;
                }else{
                    $query = "INSERT INTO cliente (nome, cnpj, ie, telefone, celular, email, cep, logradouro, numero, complemento, bairro, cidade, UF) 
                    VALUES('$cliente','$cnpj','$ie','$tel','$cel','$email','$cep','$rua','$num', '$comp','$bairro','$city','$estado')";
                    //echo $query;exit;

                    $insert = mysqli_query($conexao, $query);
                    
                    if($insert == 1){
                        echo "
                            <script>
                                alert('Cliente cadastrado com sucesso !!!');
                                location.href='clientes.php';
                            </script>
                            ";
                    }else{
                        echo "
                            <script>
                                alert('Erro no cadastro...');
                                history.back();
                            </script>
                        ";
                    }
                }
            }
        }  
    ?>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script> M.AutoInit();</script>
</body>
</html>