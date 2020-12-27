<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Novo Cadastro</title>
</head>
<body>
    <div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="light">Novo cadastro</h3>
        <form action="#" method="POST">
            <div class="input-field col s12">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="input-field col s12">
                <label for="cnpj">CNPJ</label>
                <input type="text" name="cnpj" id="cnpj">
            </div>
            <div class="input-field col s12">
                <label for="ie">Inscrição Estadual</label>
                <input type="text" name="ie" id="ie">
            </div> 
            <div class="input-field col s12">   
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone">
            </div>
            <button type="submit" class="btn">Cadastrar</button>
            <a href="index.php"><button type="submit" class="btn green">Voltar ao menu</button></a>
        </form>
    </div>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>