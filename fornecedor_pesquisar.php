<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Fornecedor - Pesquisar</title>

        <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR --> 

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    </head>
    <body>
        <form name="formPesquisar" action="fornecedor_editar.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Fornecedor - Pesquisar</h2>
                        <div class="form-group">
                            <label>CNPJ</label>
                            <input type="text" class="form-control" required="" placeholder="CNPJ do cliente" name="txtCNPJ">
                        </div>
                        
                          

                        <div class="form-group">

                            <input type="submit" value="Pesquisar" class="btn btn-info" name="btPesquisar"  >
                            <input type="button" value="Início" class="btn btn-info" name="btInicio" onclick="location.href='index.php';">
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
