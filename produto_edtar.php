<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        

        <form name="formEditar" action="produto_editar_salvar.php?idProduto=" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Produto - Editar</h2>
                        <div class="form-group">
                            <label>Descrição</label>
                            <input type="text" class="form-control" required=""  placeholder="Descrição do produto" name="txtDescricao">
                        </div>

                        <div class="form-group">
                            <label>Fornecedor</label>
                            <select class="form-control" name="selectFornecedor">
     
                                <option></option>

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
