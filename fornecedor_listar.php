<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fornecedor - Listar</title>

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
        $sql = "SELECT * FROM fornecedor";

        $resultado = retornarDados($sql);
        ?>
         
        <form name="formListar" action="" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">


                        <h2>Fornecedor - Listar</h2>

                        <div class="form-group">
                            <table>
                                <tr>
                                    <td>CNPJ</td>
                                    <td>Nome</td>
                                    <td>Endereço</td>
                                    <td>Telefone</td>
                                    <td>E-mail</td>
                                </tr>

                                <?php
                                while ($linha = mysqli_fetch_assoc($resultado)) {
                                ?>
                                <tr>
                                    <td><?php echo $linha["cnpj"]; ?></td>
                                    <td><?php echo $linha["nome"]; ?></td>
                                    <td><?php echo $linha["endereco"]; ?></td>
                                    <td><?php echo $linha["telefone"]; ?></td>
                                    <td><?php echo $linha["email"]; ?></td>
                                </tr>

                                <?php } ?>
                            </table>
                        </div>
                        <input type="button" value="Início" class="btn btn-info" name="btInicio" onclick="location.href='index.php';">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
