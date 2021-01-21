<?php
    require_once "../banco/conexao.php";
    //var_dump($_POST);
    
    $empresa = $_POST['nome']; 
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

    while($tel=="" && $cel=="" && $email==''){
        echo"
            <script>
                alert('Você precisa informar pelo menos um meio de contato!');
                location.href='cliente/cadastrarCliente.php';
            </script>
        ";

    }
    
    $querycheck = "SELECT cnpj FROM cliente WHERE cnpj='$cnpj'";
    //echo $querycheck;exit;
    $clientes = mysqli_query($conexao,$querycheck);
    $igual = mysqli_num_rows($clientes);
 
    if ($igual==1) {
         echo "<script>
                     alert('Esse CNPJ já está registrado no sistema!');
                     location.href='cadastrarCliente.php';
                 </script>";exit;
    }else{
        $query = "INSERT INTO cliente (nome, cnpj, ie, telefone, celular, email, cep, logradouro, numero, complemento, bairro, cidade, UF) 
        VALUES('$empresa','$cnpj','$ie','$tel','$cel','$email','$cep','$rua','$num', '$comp','$bairro','$city','$estado')";
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
                        alert('Erro ao cadastrar novo cliente!');
                        location.href='cadastrarCliente.php';
                    </script>
                ";
        }
    }

?>