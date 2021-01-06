<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Estoque - QUIMIS</title>
</head>
<body>
<div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="light">Novo produto</h3>
        <form action="salvaProduto.php" method="POST">
            <div class="input-field col s12">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="input-field col s12">
                <label for="formula">Fórmula</label>
                <textarea id="formula" class="materialize-textarea"></textarea>
            </div>
        </form>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
</body>
</html>