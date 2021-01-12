<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Estoque - QUIMIS</title>
</head>
<body>
<div class="row">
        <div class="center-align">
            <h3 class="light">Gerenciar Estoque</h3></br></br>
            <form method="POST" action="#">
                <div class="col s12 m6 push-m3 ">
                    <input type="text" name="busca" id="busca" placeholder="Buscar produto cadastrado pelo nome">
                    <a href="../produto/cadastrarProduto.php" class="btn-floating  btn-large waves-effect waves-light green"><i class="material-icons">add</i></a>
                    <a href="../index.php" class="btn-floating btn-large waves-effect waves light green"><i class="material-icons">arrow_back</i></a>
                </div>
            </form>
        </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        M.AutoInit();
    </script>
</body>

</html>