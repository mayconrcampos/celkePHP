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
  <a class="navbar-brand" href="#"><img src="css/money.png" width="320px" alt=""></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Adicionar Receita / Despesa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listaContas.php">Todas as Contas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Somente Receitas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Somente Despesas</a>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Add/Remover Descrições de Gastos
        </a>
        <div class="dropdown-menu"  aria-labelledby="navbarDropdownMenuLink" style="background-color:#FFDFCC">
          <a class="dropdown-item" href="addReceita.php">Cadastrar Novo Tipo de Receita</a>
          <a class="dropdown-item" href="listaDescReceitas.php">Lista de Tipos de Receitas</a>
          <hr>
          <a class="dropdown-item" href="addDespesa.php">Cadastrar Novo Tipo de Despesa</a>
          <a class="dropdown-item" href="listaDescDespesas.php">Lista de Tipos de Despesas</a>
        </div>
      </li>
    </ul>
  </div>
</nav>


    <!--<div class="p-3 mb-2 bg-white text-dark">
        <h1 class="display-3">Controle Financeiro</h1>
    </div>
    -->
    
    <!--<div>
        <ul class="nav nav-pills nav-fill bg-white flex-column flex-sm-row">
            <li class="nav-item">
                <a class="nav-link active" href="#">Adicionar Receita / Despesa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listaContas.php">Listar Todas as Contas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Receitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Despesas</a>
            </li>
        </ul>
    </div>-->
    <div class=" border border-dark" style="background-color:#FFDFCC">

        <form action="insereContaDB.php" method="post">
            <div class="form-check form-check-inline">
            <fieldset>
                <legend>Adicionar</legend>
        
        
                <div class="d-inline alert alert-primary" role="alert">
                <input type="radio" name="filtro" value="1" class="form-check-input">
                <label for="receitas" class="form-check-label">Receita</label>
                </div>
            
                <div class="d-inline alert alert-danger" role="alert">
                <input type="radio" name="filtro" value="0" class="form-check-input" checked>
                <label for="despesas" class="form-check-label">Despesa</label>
                </div>
        
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Descrição</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="descricao">
                </div><br>


                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">R$</span>
                    </div>
            
                    <input type="text" name="valor" class="form-control" aria-label="Quantia">
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Data</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="data">
                </div><br>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01" name="categoria">Categoria</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="categoria">
                        <option selected>------ Receitas ------</option>
                      
                      <?php
                        $queryReceitas = mysqli_query($conn, "SELECT id, categoria FROM cat_receita ORDER BY categoria ASC");
                        while($receita = mysqli_fetch_assoc($queryReceitas)){?>
                            <option value=<?php echo $receita['categoria']; ?>><?php echo $receita['categoria'] ;?></option>
                <?php   
                        }?>
                        <option selected>------ Despesas ------</option>
                        <?php
                        $queryDespesas = mysqli_query($conn, "SELECT id, categoria FROM cat_despesa ORDER BY categoria ASC");
                        while($despesa = mysqli_fetch_assoc($queryDespesas)){?>
                            <option value=<?php echo $despesa['categoria']; ?>><?php echo $despesa['categoria'] ;?></option>
                <?php   
                        }?>
                    </select>
                    
                </div>
                <div class="alert alert-primary" role="alert">
                        <a href="addReceita.php" class="alert-link">Adiciona Descrição de Receita</a>
                </div>

                <div class="alert alert-danger" role="alert">
                        <a href="addDespesa.php" class="alert-link"> Adiciona Descrição de Despesa</a>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Comentários</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="comentario">
                </div><br>



                <input type="submit" value="Inserir" class="btn btn-primary btn-lg btn-block">


            </fieldset>
            </div>
        </form>
        <?php
            if($_SESSION['msg']):
                echo $_SESSION['msg'];
                $_SESSION['msg'] = "";
            endif;

        ?>
    </div>


   

    <footer style="background-color:#FFEFE6">Programa de Controle Financeiro</footer>


    





    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>