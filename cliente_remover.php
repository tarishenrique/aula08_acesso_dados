<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Cliente - Remover</title>

    <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>

<body>
    <?php
    include './conexao_bd.php';

    $cpf = $_GET["cpf"];

    $sql = "DELETE FROM cliente 
            WHERE cpf = 'cpf'";

    if (executarComando($sql)) {
        echo "<h1>Cliente removido</h1>";
    } else {
        echo "<h1>Erro ao remover</h1>";
    }
    ?>

</body>

</html>