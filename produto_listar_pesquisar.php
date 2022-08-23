<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
        
        <form name="formListar" action="produto_listar.php" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Produto - Listar</h2>

                        <div class="form-group">
                            <label>Fornecedor</label>
                           <select class="form-control" name="selectFornecedor">
                                
                                    <option></option>
                           
                            </select>

                        </div>

                        <div class="form-group">

                            <input type="submit" value="Listar" class="btn btn-info" name="btListar">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
