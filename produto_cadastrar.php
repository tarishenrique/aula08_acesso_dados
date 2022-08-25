<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Produto - Cadastrar</title>

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
        
        $sql = "SELECT cnpj,nome FROM fornecedor 
               ORDER BY nome";
        
        $resultado = retornarDados($sql);
        ?>

       
        <form name="formCadastrar" action="produto_cadastrar_salvar.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Produto - Cadastrar</h2>
                        <div class="form-group">
                            <label>Descrição</label>
                            <input type="text" class="form-control" required="" placeholder="Descrição do produto" name="txtDescricao">
                        </div>

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

                            <input type="submit" value="Cadastrar" class="btn btn-info" name="btCadastrar"  >
                            <input type="button" value="Início" class="btn btn-info" name="btInicio" onclick="location.href='index.php';">
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
