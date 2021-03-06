<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pedido.css">
    <title>Detalhes do Pedido</title>
</head>
<body>
    <?php
        session_start();

        $id_cliente = $_SESSION['id_cliente'];
        $id_pedido = $_POST['id_pedido'];
        
        require_once '../banco/conexao.php';
        $query = "SELECT * FROM cliente, produtos WHERE id_cliente=$id_cliente ORDER BY nome ASC";
        $execut = mysqli_query($conexao,$query);
        //echo $query;
        
        while ($dados = mysqli_fetch_array($execut)){
        $nome = $_SESSION['nome'];
        $cnpj = $dados['cnpj'];
        $ie = $dados['ie'];
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
                    <p class='alinhar'>PEDIDO N°: $id_pedido</p>
                    <p class='alinhar'>DATA DO PEDIDO: <input id='date' type='date' value='dd/mm/yyyy'/>
                    DATA DA ENTREGA: <input id='date' type='date' value='dd/mm/yyyy'/></p>
                    <p>EMPRESA: $nome</p>
                    <p>CEP: $cep</p>
                    <p>ENDEREÇO: $log, N°$num - $bairro - $cidade/$uf</p> 
                    <p>COMPLEMENTO: $comp</p>
                    <p>TELEFONE: $tel | CELULAR: $cel</p>
                    <p>E-MAIL: $email</p>
                    <p class='alinhar'>CNPJ/CPF: $cnpj</p>
                    <p class='alinhar'>INSCRIÇÃO ESTADUAL: $ie</p>
                </fieldset>
                <fieldset>
                    <legend>OBSERVAÇÕES DO PEDIDO</legend>
                    <textarea class='txt' placeholder = 'Por ex: falar com fulano' autofocus cols='100'></textarea>
                </fieldset>
                <input type='button' value='IMPRIMIR' onClick='window.print()' class='botao'/>
                <a href='../cliente/clientes.php' button type='submit'>Voltar ao Menu</a>
            </form>
            
        ";
        }
    ?>
</body>
</html>