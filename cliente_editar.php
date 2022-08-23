<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
       

        <form name="formEditar" action="cliente_editar_salvar?cpf=.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Cliente - Editar</h2>

                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control"  required="" placeholder="Nome completo" name="txtNome">
                        </div>

                        <div class="form-group">
                            <label>Endereço</label>
                            <input type="text" class="form-control"  placeholder="Endereço"  name="txtEndereco">
                        </div>


                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control"  placeholder="Telefone" name="txtTelefone">
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