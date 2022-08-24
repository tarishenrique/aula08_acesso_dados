<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cliente - Listar</title>

        <!-- REFERENCIAS PARA O BOOTSTRAP FUNCIONAR --> 

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    </head>
    <body>
       <?php 
       
       $sql = "SELECT * FROM cliente ORDER BY nome";

       include './conexao_bd.php';

       $dados = retornarDados($sql);
       ?>

        <form name="formListar" action="" method="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">


                        <h2>Cliente - Listar</h2>

                        <div class="form-group">
                            <table>
                               
                                <tr>
                                    <td>CPF</td>
                                    <td>Nome</td>
                                    <td>Endereço</td>
                                    <td>Telefone</td>
                                </tr>

                                <?php 
                                while ($linha = mysqli_fetch_assoc($dados)){
                                ?>
                                
                                <tr>
                                    <td><?php echo $linha["cpf"]?></td>
                                    <td><?php echo $linha["nome"]?></td>
                                    <td><?php echo $linha["endereco"]?></td>
                                    <td><?php echo $linha["telefone"]?></td>
                                </tr>

                                <?php } ?>
                                
                            
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
