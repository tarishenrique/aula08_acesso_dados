<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Produto - Pesquisar</title>

    <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>

<body>

    <form name="formPesquisar" action="produto_edtar.php" method="post">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Produto - Pesquisar</h2>
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" class="form-control" required="" placeholder="ID do Produto"
                            name="txtIdProduto">
                    </div>



                    <div class="form-group">

                        <input type="submit" value="Pesquisar" class="btn btn-info" name="btPesquisar">
                    </div>

                </div>
            </div>
        </div>
    </form>
</body>

</html>