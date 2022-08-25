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
        $sql = "SELECT cnpj,nome FROM fornecedor";

        $resultado = retornarDados($sql)

        ?>
        
        <form name="formListar" action="produto_listar.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Produto - Listar</h2>

                        <div class="form-group">
                            <label>Fornecedor</label>
                            <select class="form-control" name="selectFornecedor">
                                <?php
                                
                                while ($linha = mysqli_fetch_assoc($resultado)) {
                                
                                ?>
                               
                                <option value="<?php echo $linha["cnpj"];  ?>" >
                                    <?php echo $linha["cnpj"] ." - ". $linha["nome"] ; ?></option>
                                
                                <?php } ?>
                            </select>

                        </div>

                        <div class="form-group">

                            <input type="submit" value="Listar" class="btn btn-info" name="btListar">
                            <input type="button" value="Início" class="btn btn-info" name="btInicio" onclick="location.href='index.php';">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
