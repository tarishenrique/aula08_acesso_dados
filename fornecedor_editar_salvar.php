<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Fornecedor - Editar</title>

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

    $cnpj = $_GET["cnpj"];
    $nome = $_POST["txtNome"];
    $endereco = $_POST["txtEndereco"];
    $telefone = $_POST["txtTelefone"];
    $email = $_POST["txtEmail"];

    $sql = "UPDATE fornecedor SET nome = '$nome',
             endereco = '$endereco', 
             telefone = '$telefone', 
             email = '$email' 
             WHERE cnpj = '$cnpj' ";

    if (executarComando($sql)) {
        echo "<h1>Atualizado </h1>";
    } else {
        echo "<h1>Erro </h1>";
    }




    ?>


</body>

</html>