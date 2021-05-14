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
        if (isset($_GET['id'])) {
            session_start();
            $_SESSION['idproduto'] = $_GET['id'];
            print_r($_SESSION);

        }
    ?>
    <div>
    </div>
</body>
</html>