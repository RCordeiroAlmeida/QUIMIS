<?php   
    require_once "../banco/conexao.php";
    //var_dump($_POST);exit;

    $nome = $_POST['nome'];
    $descricaoProd = $_POST['descricaoProd'];
    $formula = $_POST['formula'];
    $estoqueMin = $_POST['estoqueMin'];
    $unidadeMed = $_POST['unidadeMed'];
    $fornecedor = $_POST['fornecedor'];
    $fabricante = $_POST['fabricante'];
    $precoMed = $_POST['precoMed'];
    $lote = $_POST['lote'];
    $descricaoTec = $_POST['descricaoTec'];
    $obs = $_POST['obs'];

    $querycheck = "SELECT nome FROM produtos WHERE nome='$nome'";
    //echo $querycheck;exit;
    $produtos =  mysqli_query($conexao,$querycheck);
    $igual = mysqli_num_rows($produtos);

    if($igual==1){
        echo "<script>
                    alert('Este produto já está cadastrado no estoque!);
                    location.href=cadastrarProduto.php';
                </script>";exit;
    }else{
        $query = "INSERT INTO produtos (nome, descricaoProd, formula, estoqueMin, unidadeMed, fornecedor, fabricante, precoMed, lote, descricaoTec, obs)
        VALUES('$nome', '$descricaoProd', '$formula', '$estoqueMin, '$unidadeMed', '$fornecedor', '$fabricante', '$precoMed', '$lote', '$descricaoTec', '$obs')";
        echo $query;exit;

        $insert = mysqli_query($conexao, $query);

        if($insert == 1){
            echo"
                    <script>
                        alert('Produto cadastrado com sucesso!!!);
                        location.href='cadastrarProd.php';
                    </script>
                ";
        }else{
            echo"
                    <script>
                        alert('Erro ao cadastrar novo produto!!!');
                        location.href='cadastrarProd.php';
                    </script>
                ";
        }
    }
?>

    