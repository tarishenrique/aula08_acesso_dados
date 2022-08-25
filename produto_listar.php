<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Produto - Listar</title>

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
        $cnpj = $_POST["selectFornecedor"];

        $sql = "SELECT * FROM produto WHERE fornecedor_cnpj = '$cnpj'";
        $resultado = retornarDados($sql);
        ?>
         
        <form name="formListar" action="" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Produto - Listar</h2>

                        <div class="form-group">
                            <table>
                                <tr>
                                    <td>ID</td>
                                    <td>Nome</td>
                                    <td>Fornecedor</td>
                                </tr>
                                <?php
                                    while ($linha = mysqli_fetch_assoc($resultado)) 
                                    {
                                ?>
                                <tr>
                                    <td> <?php echo $linha["idProduto"]; ?></td>
                                    <td> <?php echo $linha["descricao"]; ?></td>
                                    <td> <?php echo $linha["fornecedor_cnpj"]; ?></td>
                                </tr>

                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
