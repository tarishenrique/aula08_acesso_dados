<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Fornecedor - Cadastrar</title>

        <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR --> 

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    </head>
    <body>
        <?php
            $cnpj = $_POST["txtCNPJ"];
            $nome = $_POST["txtNome"];
            $endereco = $_POST["txtEndereco"];
            $telefone = $_POST["txtTelefone"];
            $email = $_POST["txtEmail"];

            $sql = "INSERT INTO fornecedor
                    (cnpj, nome, endereco, telefone, email)
                    Values ('$cnpj','$nome','$endereco','$telefone','$email')";

            include './conexao_bd.php';

            if (executarComando($sql)){
                echo "<h1> Fornecedor cadastrado com sucesso </h1>";
            } else {
                echo "<h1> Não cadastrado! </h1>";
            }
        ?>
        
    </body>
</html>
