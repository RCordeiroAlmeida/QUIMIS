<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<title>Clientes - QUIMIS</title>
</head>
<body>
    <div class="row">
        <div class="center-align">
            <h3 class="light">Buscar clientes cadastrados</h3></br></br>
            <form method="POST" action="buscaCliente.php">
                <div class="col s12 m6 push-m3 ">
                    <input type="text" name="busca" id="busca" placeholder="Buscar cliente cadastrado pelo nome">
                    <button type="submit" class="btn-floating btn-large waves-effect waves-light orange darken"><i class="material-icons">search</i></button>
                    <a href="cadastrarCliente.php" class="btn-floating  btn-large waves-effect waves-light orange darken"><i class="material-icons">add</i></a>
                    <a href="index.php" class="btn-floating btn-large waves-effect waves light orange darken"><i class="material-icons">arrow_back</i></a>
                </div>
            </form>
        </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>M.AutoInit();</script>
</body>
</html>