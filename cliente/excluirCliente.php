<?php
    require_once '../banco/conexao.php';
    //print_r($_POST);

    $id = $_POST['id_cliente'];
    //echo $id;
    $query = "DELETE FROM cliente WHERE id_cliente=$id";
    //echo $query;exit;
    $delete = mysqli_query($conexao,$query);
    //echo $delete;exit;

    if($delete==1){
        echo "<script>
                alert('Cliente excluído com sucesso!');
                location.href='clientes.php';
            </script>
        ";

    }else{
        echo "<script>
                alert('Não foi possível excluir o cliente');
                location.href='clientes.php';
            </script>
        ";
    }
?>

