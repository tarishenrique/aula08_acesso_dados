<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cliente - Cadastrar</title>

        <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR --> 

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    </head>
    <body>
        <?php 
        $cpf = $_POST["txtCPF"];
        $nome = $_POST["txtNome"];
        $endereco = $_POST["txtEndereco"];
        $telefone = $_POST["txtTelefone"];

        include './conexao_bd.php';

        $sql = "INSERT INTO cliente (cpf,nome,endereco,telefone)"
                . " VALUES ('$cpf', '$nome', '$endereco', '$telefone' ) ";

        if (executarComando($sql)){
            echo "<h1>CLiente inserido</h1>";
        }
        else {
            echo "<h1>Cliente não cadastrado";
        }
        
        
        ?>
       
    </body>
</html>
