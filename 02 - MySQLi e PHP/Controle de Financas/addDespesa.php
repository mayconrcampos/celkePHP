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
    <div class="p-3 mb-2 bg-info text-white">
        <h1 class="display-5">Cadastrar Tipos de Despesas</h1>
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
    </div>
    <div class="alert alert-primary" role="alert">
    <a class="text-info" href="index.php">Adicionar Contas</a>
    </div>
    <footer class="alert alert-secondary">Programa de Controle Financeiro</footer>
    
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>