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
    $cnpj = $_POST["txtCNPJ"];

    $sql = "SELECT * FROM fornecedor 
                WHERE cnpj='$cnpj'";

    $resultado = retornarDados($sql);

    $linha = mysqli_fetch_assoc($resultado);
    ?>

    <form name="formEditar" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Fornecedor - Editar</h2>


                    <div class="form-group">
                        <label>Nome</label>
                        <input value="<?php echo $linha["nome"] ?>" type="text" class="form-control" required=""
                            placeholder="Nome completo" name="txtNome">
                    </div>

                    <div class="form-group">
                        <label>Endereço</label>
                        <input value="<?php echo $linha["endereco"] ?>" type="text" class="form-control"
                            placeholder="Endereço" name="txtEndereco">
                    </div>


                    <div class="form-group">
                        <label>Telefone</label>
                        <input value="<?php echo $linha["telefone"] ?>" type="text" class="form-control"
                            placeholder="Telefone" name="txtTelefone">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input value="<?php echo $linha["email"] ?>" type="email" class="form-control"
                            placeholder="Email" name="txtEmail">
                    </div>


                    <div class="form-group">

                        <input formaction="fornecedor_editar_salvar.php?cnpj=<?php echo $cnpj ?>" type="submit"
                            value="Editar" class="btn btn-info" name="btEditar">
                        <input formaction="fornecedor_remover.php?cnpj=<?php echo $cnpj ?>" type="submit"
                            value="Remover" class="btn btn-info" name="btRemover">

                        <input type="button" value="Início" class="btn btn-info" name="btInicio"
                            onclick="location.href='index.php';">

                    </div>

                </div>
            </div>
        </div>
    </form>
</body>

</html>