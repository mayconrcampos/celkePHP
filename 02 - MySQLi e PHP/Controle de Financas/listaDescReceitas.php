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
        <h1 class="display-5">Cadastrar Nova Descrição de Receita</h1>
    </div>

        <div>
            <ul class="nav nav-pills nav-fill bg-white flex-column flex-sm-row">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Adicionar Contas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addReceita.php">Cadastrar Tipos de Receitas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Listar Todas as Descrições de Receitas</a>
                </li>

            </ul>
        </div>

        <div class="border border-dark  alert alert-primary table-responsive" role="alert">
            <table class="table table-sm table-striped table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Descrição</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $queryDescReceitas = mysqli_query($conn, "SELECT * FROM cat_receita ORDER BY categoria");
                    
                    while($linha = mysqli_fetch_assoc($queryDescReceitas)){ ?>
                        <tr>
                            <th><?php echo $linha['id']; ?></th>
                            <td><?php echo $linha['categoria']; ?></td>
                            <td><a href="editaReceita.php?id=<?php echo $linha['id']; ?>"><img src="css/pencil-fill.svg"></a></td>
                            <td><a href="excluiReceita.php?id=<?php echo $linha['id']; ?>"><img src="css/trash-fill.svg"></a></td>
                        </tr>
            <?php   }   ?>
                </tbody>
            </table>
        </div>
        
    </div>
    <footer class="alert alert-secondary">Programa de Controle Financeiro</footer>

    
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>