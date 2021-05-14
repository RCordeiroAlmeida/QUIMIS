<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Pedido</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION['qtdd'] = $_GET['qtdd'];
        $_SESSION['idproduto'] = $_GET['id'];

        $sql = $conexao -> query("INSERT INTO carrinho (id_pedido)VALUES   ")

        echo "Ola $_SESSION[adm], você inseriu $_SESSION[qtdd] unidades de $_SESSION[idproduto] no carrinho do $_SESSION[cliente]";
    ?>
</body>
</html>