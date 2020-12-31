<?php
    require_once "banco/conexao.php";
    //var_dump($_POST);
    
    $empresa = $_POST['nome']; 
    $cnpj = $_POST['cnpj']; 
    $ie = $_POST['ie']; 
    $tel = $_POST['telefone'];
    $cel = $_POST['celular']; 
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $log = $_POST['logradouro'];
    $num = $_POST['numero'];
    $comp = $_POST['complemento']; 
    $bairro = $_POST['bairro'];
    $city = $_POST['cidade']; 
    $estado = $_POST['uf'];


    $query = "INSERT INTO cliente (nome, cnpj, ie, telefone, celular, email, cep, logradouro, numero, complemento, cidade, UF) 
    VALUES('$nome','$cnpj','$ie','$tel','$cel','$email','$cep','$log','$num','$bairro','$city','$estado')";

    $insert = mysqli_query($conexao, $query);
        
    if($insert == 1){
        echo "
                <script>
                    alert('Cliente cadastrado com sucesso !!!');
                    location.href='cadastrarCliente.php';
                </script>
            ";
    }else{
        echo "
                <script>
                    alert('Erro ao cadastrar novo cliente!');
                    location.href='cadastrarCliente.php';
                </script>
            ";
    }

?>