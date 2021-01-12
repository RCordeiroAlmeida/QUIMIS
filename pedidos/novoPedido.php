<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/novoPedido.css">
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
    <title>Novo Pedido - QUIMIS</title>
</head>
<body>
    <div class="row">
        <div class="center-align">
            <h3 class="light">Gerar novo pedido</h3>
            <form class="col s12">
                    <div class="input-field col s12 m6 push-m3">
                        <textarea id="pedido" class="materialize-textarea"></textarea>
                        <label for="pedido" class='active'>Pedido</label>
                        <input type = 'hidden' name = 'id_cliente' value = '$id'/>
                        <div class = "botoes">
                            <a href="verificaPedido.php" class='btn waves-effect waves-light blue'><i class='material-icons left'>send</i>Enviar</button>
                            <a href="../index.php" button type="submit" class="btn green">Voltar ao menu</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
</body>
</html>