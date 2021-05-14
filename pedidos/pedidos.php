<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../css/pedidos.css">
    <title>Pedidos - QUIMIS</title>
</head>
<body>
    <div class="row">
        <div class="center-align">
            <h3 class="light">Buscar pedido</h3></br></br>
                <div class="col s12 m6 push-m3 ">
                    <input type="text" name="busca" id="busca" placeholder="Digite aqui para consultar um pedido">
                    <a href="novoPedido.php" class="btn-floating  btn-large waves-effect waves-light blue"><i class="material-icons">add</i></a>
                    <a href="../index.php" class="btn-floating btn-large waves-effect waves light blue"><i class="material-icons">arrow_back</i></a>
                </div>
            </form>
        </div>
    </div>
    <div class='row col s12 m6 push-m3'>
        <table class='highlight centered responsive-table'>
            <thred>
                <tr>
                    <th class="center-align">Nome do pedido</th>
                    <th class="center-align">Visualizar</th>
                </tr>
            <thead>

            <?php
                require_once '../banco/conexao.php';
                $query = "SELECT * FROM consulta_ped";
                $execut = mysqli_query($conexao, $query);


                While ($dados = mysqli_fetch_array($execut)){
                    $nome = $dados['nm_pedido'];
                    $pdf = $dados['arq_pedido'];

                    echo"
                        <tbody id = 'mytable'>
                            <tr>
                                <td>$nome</td>
                                <td>$pdf</td>
                            </tr>
                    ";
                                    
                }
            ?>


    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
</body>
</html>