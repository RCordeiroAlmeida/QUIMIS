<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <title>Estoque - QUIMIS</title>
</head>
<body>
<div class="row">
    <div class="col s12 m6 push-m3 ">
        <h3 class="light">Novo produto</h3>
        <h6>Todos os campos marcados com <span style="color: red;">*</span> são obrigatórios.</h6>
        <form action="salvaProduto.php" method="POST">
            <div class="input-field col s12">
                <label for="nome">Nome <span style="color: red;">*</span></label>
                <input type="text" name="nome" id="nome" maxlength="100" required>
            </div>
            <div class="input-field col s12">
                <label for="descricaoProd">Descrição do produto <span style="color: red;">*</span></label>
                <textarea id="descricaoProd" name = "descricaoProd" class="materialize-textarea" maxlength="255" required></textarea>
            </div>
            <div class="input-field col s12">
                <label for="formula">Fórmula <span style="color: red;">*</span></label>
                <input type="text" id="formula" name= 'formula' maxlength = "50" required>
            </div>
            <div class="input-field col s12">
                <label for="estoqueMin">Quantidade: <span style="color: red;">*</span></label>
                <input type="number" name="estoque" id="estoqueMin" maxlength="5">
            </div>
            <div class="input-field col s12">
                <label for="unidadeMed">Unidade media</label>
                <input type="number" name="unidadeMed" id="unidadeMed" maxlength="5">
            </div>
            <div class="input-field col s12">
                <label for="fornecedor">Fornecedor <span style="color: red;">*</span></label>
                <input type="text" name="fornecedor" id="fornecedor" maxlength = "50" required>
            </div>
            <div class="input-field col s12">
                <label for="fabricante">Fabricante <span style="color: red;">*</span></label>
                <input type="text" name="fabricante" id="fabricante" maxlength="50" required>
            </div>
            <div class="input-field col s12">
                <label for="precoMed">Preço <span style="color: red;">*</span></label>
                <input type="text" name="preco" class="form-control" onkeypress="$(this).mask('R$ 999.990,00')" required/>
            </div>
            <div class="input-field col s12">
                <label for="lote">Lote <span style="color: red;">*</span></label>
                <input type="number" name="lote" id="lote" maxlength="10" required>
            </div>
            <div class="input-field col s12">
                <label for="descricaoTec">Descrição técnica</label>
                <textarea id="descricaoTec" name = 'descricaoTec' class="materialize-textarea"></textarea>
            </div>
            <div class="input-field col s12">
                <label for="obs">Observações</label>
                <textarea id="obs" name = "obs" class="materialize-textarea"></textarea>
            </div>
            <div class="input-field col s12">
                <button type="submit" name="submit" class="btn blue"><i class="material-icons left">send</i>Cadastrar</button>
                <a href="../estoque/gerenciarEstoque.php" button type="submit" class="btn green"><i class="material-icons left">arrow_back</i>Voltar</a>
            </div>
        </form>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>
</html>