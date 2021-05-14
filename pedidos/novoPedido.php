<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!---->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="../css/novoPedido.css">
    <title>Novo Pedido</title>
</head>
<body>
    <h3 class="light center-align">Upload de pedidos</h3>
    <form action="" method="POST">
        <div class="input-field col s12">
            <label for="nome">Dê um nome à este pedido</label>
            <input type="text" name="nome" id="nome" maxlength = "50" required/>
        <div class="align-item right">
            <a href="pedidos.php" class="btn-floating  btn-large waves-effect waves-light blue"><i class="material-icons">arrow_back</i></a>
        </div>
        </div>
        <div class="input-field col s12">
            <input type="file" name="arq" id="arq"required/>
        </div>
        <div class="input-field col s12 center-align btn-float">
            <button type="submit" name='submit' class="btn blue"><i class='material-icons left'>send</i>Enviar</button> 
        </div>
    </form>
    <?php
        require_once "../banco/conexao.php";
        require_once "../scripts/notNull.php";
        
        if(isset($_POST['submit'])){
            $nome = $_POST['nome'];
            $pdf = $_POST['arq'];

            $input = array(
                0 => $nome,
                1 => $pdf
            );

            if(isset($nome) && isset($pdf))
            if (notNull($input)){
                echo"
                    <script>
                        alert('Ops, é obrigatório um nome e um arquivo');
                    </script>
                ";                
            }else{
                $querycheck = "SELECT * FROM consulta_ped WHERE nome ='$nome'";
                //echo $querycheck;exit;
                $nomeantigo = mysqli_query($conexao, $querycheck);
                $igual = mysqli_num_rows($nomeantigo);

                if ($igual==1){
                    echo"
                        <script>
                            alert('Este nome já está registrado no sistema, favor escolher outro!');
                        </script>
                    ";exit;
                }else{
                    $query = "INSERT INTO consulta_ped (nm_pedido, arq_pedido)
                    VALUES ('$nome', '$pdf')";
                    //echo $query;exit;

                    $insert = mysqli_query($conexao, $query);

                    if($insert == 1){
                        echo "
                            <script>
                                alert('Upload de arquivo executado com sucesso!!!');
                                location.href='pedidos.php';
                            </script>
                        ";
                    }else{
                        echo "
                            <script>
                                alert('Erro no upload!');
                                history.back();
                            </script>
                        ";
                    }
                }
            }    
        }
    ?>
        
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script> M.AutoInit();</script>
</body>
</html>