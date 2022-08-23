<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <title>Fornecedor - Cadastrar</title>

        <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR --> 

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    </head>
    <body>
  <form name="formCadastrar" action="fornecedor_cadastrar_salvar.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Fornecedor - Cadastrar</h2>
                        <div class="form-group">
                            <label>CNPJ</label>
                            <input type="text" class="form-control" required="" placeholder="CNPJ do fornecedor" name="txtCNPJ">
                        </div>
                        
                           <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" required="" placeholder="Nome completo" name="txtNome">
                        </div>
                        
                            <div class="form-group">
                            <label>Endereço</label>
                            <input type="text" class="form-control"  placeholder="Endereço" name="txtEndereco">
                        </div>

                        
                            <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control"  placeholder="Telefone" name="txtTelefone">
                        </div>
                        
                            <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control"  placeholder="Email" name="txtEmail">
                        </div>


                        <div class="form-group">

                            <input type="submit" value="Cadastrar" class="btn btn-info" name="btCadastrar"  >
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
