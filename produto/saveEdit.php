<!DOCTYPE html>
<html lang="pt=BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirma Edição</title>
</head>
<body>

    <?php
        //var_dump($_POST);
        require_once '../banco/conexao.php';

        $id = $_POST['id_produto'];
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

        $verifica = "SELECT nome FROM produtos WHERE nome='$nome' AND id_produto!='$id'";
        //echo $verifica;exit;

        $check = mysqli_query($conexao,$verifica);
        $reg = mysqli_num_rows($check);

        if ($reg>0){
            echo "<script>
                    alert('Opa, esse produto já está registrado na base de dados. Não é permitido cadastrar o mesmo produto mais de uma vez!');
                    location.href='../estoque/gerenciarEstoque.php';
                </script>
            ";
        }else{
            $query = "UPDATE produtos SET nome='$nome', descricaoProd='$descricaoProd', formula='$formula', estoqueMin='$estoqueMin', unidadeMed='$unidadeMed', fornecedor='$fornecedor', fabricante='$fabricante', precoMed='$precoMed', 
            lote='$lote', descricaoTec='$descricaoTec', obs='$obs' WHERE id_produto = $id";
            //echo $query;exit;
            $update = mysqli_query($conexao,$query);
            if($update==1){
                echo "<script>
                    alert('Alterações salvas com sucesso!');
                    location.href='../estoque/gerenciarEstoque.php';
                </script>
                ";
            }else{
                echo "<script>
                    alert('Ocorreu um erro...');
                    location.href='../estoque/gerenciarEstoque.php';
                </script>
                ";
            }
        }
    ?>
</body>
</html>