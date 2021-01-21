<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pedido.css">
    <title>Novo pedido</title>
</head>
<body>
    <?php
        //print_r($_POST);

        $id = $_POST['id_pedido'];
        //echo $id;
        
         require_once '../banco/conexao.php';
         $query = "SELECT * FROM cliente WHERE id_cliente=$id ORDER BY nome ASC";
         $execut = mysqli_query($conexao,$query);
         
         while ($dados = mysqli_fetch_array($execut)){
            $id_cliente = $dados['id_cliente'];
            $nome = $dados['nome'];
            $cnpj = $dados['cnpj'];
            $ie = $dados['ie'];
            $client = $dados['client'];
            $tel = $dados['telefone'];
            $cel = $dados['celular'];
            $email = $dados['email'];
            $cep = $dados['cep'];
            $log = $dados['logradouro'];
            $num = $dados['numero'];
            $comp = $dados['complemento'];
            $bairro = $dados['bairro'];
            $cidade = $dados['cidade'];
            $uf = $dados['UF'];
        
            echo"
                <form action='' method='POST'>
                    <fieldset>
                        <legend>QUIMINIL</legend>
                    </fieldset>
                    <fieldset>
                        <legend>DADOS DO CLIENTE</legend>
                        <p class='alinhar'>PEDIDO N°: $id</p>
                        <p class='alinhar'>DATA DO PEDIDO: <input id='date' type='date' value='dd/mm/yyyy'/>
                        DATA DA ENTREGA: <input id='date' type='date' value='dd/mm/yyyy'/></p>
                        <p>EMPRESA: $nome</p>
                        <p>CLIENTE: $client</p>
                        <p>CEP: $cep</p>
                        <p>ENDEREÇO: $log, N°$num - $bairro - $cidade/$uf</p> 
                        <p>COMPLEMENTO: $comp</p>
                        <p>TELEFONE: $tel | CELULAR: $cel</p>
                        <p>E-MAIL: $email</p>
                        <p class='alinhar'>CNPJ/CPF: $cnpj</p>
                        <p class='alinhar'>INSCRIÇÃO ESTADUAL: $ie</p>
                    </fieldset>
                    <fieldset>
                        <legend>DADOS DO PEDIDO</legend>
                        <textarea></textarea>
                    </fieldset>
                    <input type='button' value='IMPRIMIR' onClick='window.print()' class='botao'/>
                    <a href='../cliente/clientes.php' button type='submit'>Voltar ao Menu</a>
                </form>
                
            ";
         }
    ?>
</body>
</html>