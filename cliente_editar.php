<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cliente - Editar</title>

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
        $cpf = $_POST["txtCPF"];

        $sql = "SELECT * FROM cliente 
                WHERE cpf='$cpf'";
        
        $resultado = retornarDados($sql);

        $linha = mysqli_fetch_assoc($resultado);
        ?>
       

        <form name="formEditar" action="cliente_editar_salvar?cpf=.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Cliente - Editar</h2>

                        <div class="form-group">
                            <label>Nome</label>
                            <input value="<?php echo $linha["nome"] ?>" type="text" class="form-control"  required="" placeholder="Nome completo" name="txtNome">
                        </div>

                        <div class="form-group">
                            <label>Endereço</label>
                            <input value="<?php echo $linha["endereco"] ?>" type="text" class="form-control"  placeholder="Endereço"  name="txtEndereco">
                        </div>


                        <div class="form-group">
                            <label>Telefone</label>
                            <input value="<?php echo $linha["telefone"] ?>" type="text" class="form-control"  placeholder="Telefone" name="txtTelefone">
                        </div>

                        <div class="form-group">

                            <input type="submit" value="Editar" class="btn btn-info" name="btEditar">
                            <a href="cliente_remover.php?cpf=">
                            <input type="button" value="Remover" class="btn btn-info" name="btRemover">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
