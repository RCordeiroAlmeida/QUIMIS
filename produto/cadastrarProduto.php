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
                <label for="descricaoProd">Descrição do produto</label>
                <textarea id="descricaoProd" name = "descricaoProd" class="materialize-textarea"></textarea>
            </div>
            <div class="input-field col s12">
                <label for="formula">Fórmula</label>
                <textarea id="formula" name= 'formula' class="materialize-textarea"></textarea>
            </div>
            <div class="input-field col s12">
                <label for="estoqueMin">Estoque mínimo</label>
                <input type="text" name="estoqueMin" id="estoqueMin">
            </div>
            <div class="input-field col s12">
                <label for="unidadeMed">Unidade media</label>
                <input type="text" name="unidadeMed" id="unidadeMed">
            </div>
            <div class="input-field col s12">
                <label for="fornecedor">Fornecedor</label>
                <input type="text" name="fornecedor" id="fornecedor">
            </div>
            <div class="input-field col s12">
                <label for="fabricante">Fabricante</label>
                <input type="text" name="fabricante" id="fabricante">
            </div>
            <div class="input-field col s12">
                <label for="precoMed">Preço médio</label>
                <input type="text" name="precoMed" id="precoMed">
            </div>
            <div class="input-field col s12">
                <label for="lote">Lote</label>
                <input type="text" name="lote" id="lote">
            </div>
            <div class="input-field col s12">
                <label for="descricaoTec">Descrição técnica</label>
                <textarea id="descricaoTec" name = 'descricaoTec' class="materialize-textarea"></textarea>
            </div>
            <div class="input-field col s12">
                <label for="obs">Observação</label>
                <textarea id="obs" name = "obs" class="materialize-textarea"></textarea>
            </div>
            <div class="input-field col s12">
                <a href="../index.php" button type="submit" class="btn green">Voltar ao menu</a>
                <button type="submit" class="btn blue">Cadastrar</button>
            </div>
        </form>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
</body>
</html>