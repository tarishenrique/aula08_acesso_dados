<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Produto - Editar</title>

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

    $id = $_POST["txtIdProduto"];

    $sql = "SELECT idProduto, descricao, fornecedor_cnpj  FROM produto 
            WHERE idproduto = '$id'";

    $resultado = retornarDados($sql);

    $linha = mysqli_fetch_assoc($resultado);
    ?>


    <form name="formEditar" action="produto_editar_salvar.php?idProduto=" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Produto - Editar</h2>
                    <div class="form-group">
                        <label>Descrição</label>
                        <input value="<?php echo $linha["descricao"] ?>" type="text" class="form-control" required=""
                            placeholder="Descrição do produto" name="txtDescricao">
                    </div>

                    <div class="form-group">
                        <label>Fornecedor</label>
                        <select class="form-control" name="selectFornecedor">
                            <?php

                            while ($linha = mysqli_fetch_assoc($resultado)) {

                            ?>

                            <option value="<?php echo $linha["fornecedor_cnpj"];  ?>">
                                <?php echo $linha["fornecedor_cnpj"] . " - " . $linha["nome"]; ?></option>

                            <?php } ?>
                        </select>

                    </div>


                    <div class="form-group">

                        <input type="submit" value="Editar" class="btn btn-info" name="btEditar">
                        <a href="produto_remover.php?idProduto=">
                            <input type="button" value="Remover" class="btn btn-info" name="btRemover">
                    </div>

                </div>
            </div>
        </div>
    </form>
</body>

</html>