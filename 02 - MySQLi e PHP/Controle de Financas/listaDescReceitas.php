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


<body style="background-color:#ffefe6">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#FFEFE6">
  <a class="navbar-brand" href="index.php"><img src="css/money.png" width="320px" alt=""></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Adicionar Receita / Despesa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="listaContas.php">Listar Contas / Filtrar por</a>
      </li>
   
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Add/Remover Descrições de Gastos
        </a>
        <div class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink" style="background-color:#FFDFCC">
          <a class="dropdown-item" href="addReceita.php">Cadastrar Novo Tipo de Receita</a>
          <a class="dropdown-item" href="#">Lista de Tipos de Receitas</a>
          <hr>
          <a class="dropdown-item" href="addDespesa.php">Cadastrar Novo Tipo de Despesa</a>
          <a class="dropdown-item" href="listaDescDespesas.php">Lista de Tipos de Despesas</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

        <div class="border border-dark table-responsive" style="background-color:#FFDFCC">
            <table class="table table-sm table-striped table-hover table-bordered">
                <thead class="thead">
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
    <footer style="background-color:#FFEFE6">Programa de Controle Financeiro</footer>

    
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>