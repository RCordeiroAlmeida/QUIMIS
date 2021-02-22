<?php
    require_once '../banco/conexao.php';
    //print_r($_POST);

    $id = $_POST['id_produto'];
    //echo $id;exit;
    $query = "DELETE FROM produtos WHERE id_produto=$id";
    //echo $query;exit;
    $delete = mysqli_query($conexao,$query);
    //echo $delete;exit;

    if($delete==1){
        echo "<script>
                alert('Produto excluído com sucesso!');
                location.href='../estoque/gerenciarEstoque.php';
            </script>
        ";

    }else{
        echo "<script>
                alert('Não foi possível excluir o produto');
                location.href='../estoque/gerenciarEstoque.php';
            </script>
        ";
    }
?>