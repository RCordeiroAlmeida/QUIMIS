<?php   
    require_once "../banco/conexao.php";
    require_once "../scripts/notNull.php";
    //var_dump($_POST);exit;

    if (isset($_POST['submit'])) {
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

        $input = array(
            0 => $nome,
            1 => $descricaoProd,
            2 => $formula,
            3 => $estoqueMin,
            4 => $fornecedor,
            5 => $fabricante,
            6 => $precoMed,
            7 => $lote
        );
        #var_dump($input);exit;

        if (notNull($input)) {
            echo "
                <script>
                    alert('Alguns campos obrigatórios estão vazios, por favor verifique novamente');
                    history.back();
                </script>
            ";
        }else{
            $querycheck = "SELECT formula FROM produtos WHERE formula='$formula'";
            //echo $querycheck;exit;
            $produtos =  mysqli_query($conexao,$querycheck);
            $igual = mysqli_num_rows($produtos);

            if($igual==1){
                echo "
                    <script>
                        alert('Não é permitido cadastrar o mesmo produto duas vezes');
                        history.back();
                    </script>
                ";
            }else{

                $query = "INSERT INTO produtos (nome, descricaoProd, formula, estoque, unidadeMed, fornecedor, fabricante, preco, lote, descricaoTec, obs)
                VALUES('$nome', '$descricaoProd', '$formula', '$estoqueMin', '$unidadeMed', '$fornecedor', '$fabricante', '$precoMed', '$lote', '$descricaoTec', '$obs')";
                #echo $query;exit;

                $insert = mysqli_query($conexao, $query);

                if($insert == 1){
                    echo"
                            <script>
                                alert('Produto cadastrado com sucesso!');
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
        } 
    }
?>

    