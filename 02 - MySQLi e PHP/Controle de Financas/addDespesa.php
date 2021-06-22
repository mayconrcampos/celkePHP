<?php
include_once("db.php");
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Financeiro Doméstico</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="p-3 mb-2 bg-white text-dark">
        <h1 class="display-5">Cadastrar Descrição de Despesas</h1>
    </div>

    <div>
        <ul class="nav nav-pills nav-fill bg-white flex-column flex-sm-row">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Adicionar Contas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Cadastrar Descrição de Despesas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listaDescDespesas.php">Listar Todas as Descrições de Despesas</a>
            </li>
 

        </ul>
    </div>

    <div class="alert alert-primary" role="alert">
        <form action="" method="post">
            <div class="form-group form-check form-check-inline">
            <fieldset>
                <legend>Inserir</legend>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Descrição</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="despesa">
                </div><br>

                <input type="submit" value="Inserir" class="btn btn-primary btn-lg btn-block">


            </fieldset>
            </div>
        </form>
        <?php
            $despesa = filter_input(INPUT_POST, "despesa", FILTER_SANITIZE_STRING);

            if($despesa){
                $insertDespesa = mysqli_query($conn, "INSERT INTO cat_despesa (categoria) VALUES ('$despesa')");

                if(mysqli_affected_rows($conn)){
                    $_SESSION['msg'] = "Despesa adicionada com sucesso à lista de descrição de despesas.";
                    header("Location: listaDescDespesas.php");
                }else{
                    echo "ERRO ao adicionar nova descrição de despesa.";   
                }
            }else{
                echo "É necessário preencher o campo antes de inserir.";
            
            }
            
        ?>
    </div>
  
    <footer class="alert alert-secondary">Programa de Controle Financeiro</footer>
    
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>