<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Novo Cadastro</title>
</head>
<body>
    <div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="light">Novo cadastro</h3>
        <form action="salva.php" method="POST">
            <div class="input-field col s12">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="input-field col s12">
                <label for="cnpj">CNPJ</label>
                <input type="text" name="cnpj" id="cnpj">
            </div>
            <div class="input-field col s12">
                <label for="ie">Inscrição Estadual</label>
                <input type="text" name="ie" id="ie">
            </div> 
            <div class="input-field col s12">   
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone">
            </div>
            <div class="input-field col s12">   
                <label for="celular">Celular</label>
                <input type="text" name="celular" id="celular">
            </div>
            <div class="input-field col s12">   
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="input-field col s12">   
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep">
            </div>
            <div class="input-field col s12">   
                <label for="logradouro">Logradouro</label>
                <input type="text" name="logradouro" id="logradouro">
            </div>
            <div class="input-field col s12">   
                <label for="numero">Número</label>
                <input type="text" name="numero" id="numero">
            </div>
            <div class="input-field col s12">   
                <label for="complemento">Complemento</label>
                <input type="text" name="complemento" id="complemento">
            </div>
            <div class="input-field col s12">   
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro">
            </div>
            <div class="input-field col s12">   
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade">
            </div>
            <div class="input-field col s12">
                <label for="uf">Estado</label></br></br>
                    <select class='browser-default' id='uf' name = 'uf'>
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
            <script type="text/javascript">
		        $("#cep").focusout(function(){
			//Início do Comando AJAX
			        $.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CEP
				        url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				//Aqui você deve preencher o tipo de dados que será lido,
				//no caso, estamos lendo JSON.
				        dataType: 'json',
				//SUCESS é referente a função que será executada caso
				//ele consiga ler a fonte de dados com sucesso.
				//O parâmetro dentro da função se refere ao nome da variável
				//que você vai dar para ler esse objeto.
				        success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
					        $("#logradouro").val(resposta.logradouro);
					        $("#complemento").val(resposta.complemento);
					        $("#bairro").val(resposta.bairro);
					        $("#cidade").val(resposta.localidade);
					        $("#uf").val(resposta.uf);
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					        $("#numero").focus();
				        }
			        });
		        });
	        </script>
            <button type="submit" class="btn">Cadastrar</button>
            <a href="index.php" button type="submit" class="btn green">Voltar ao menu</a>
        </form>
    </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
</body>
</html>