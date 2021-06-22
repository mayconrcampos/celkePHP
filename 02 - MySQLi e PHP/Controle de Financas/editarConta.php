<?php
include_once("db.php");
session_start();

if($_SESSION['msg']):
    echo $_SESSION['msg'];
    
    $_SESSION['msg'] = "";
endif;

$ide = $_GET['id'];
$editaConta = mysqli_query($conn, "SELECT * FROM controle WHERE id='$ide'");

$linhaConta = mysqli_fetch_assoc($editaConta);

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
        <h1 class="display-3">Controle Financeiro</h1>
    </div>

    <div>
        <ul class="nav nav-pills nav-fill bg-white flex-column flex-sm-row">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Adicionar Contas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listaContas.php">Listar Contas</a>
            </li>
            <li class="nav-item">
                <a class='nav-link active' href="#">Editar Contas</a>
            </li>
        </ul>
    </div>

    <div class="alert alert-primary" role="alert">

        <form action="editaContaDB.php" method="post">
            <div class="form-group form-check form-check-inline">
            <fieldset>
                <legend>Editar Conta</legend>

                <div class="alert alert-primary" role="alert">
                <legend>Tipo de conta</legend>
                <input type="radio" name="filtro" value="1" class="form-check-input">
                <label for="receitas" class="form-check-label">Receita</label>
                </div>
                <div class="alert alert-danger" role="alert">
                <input type="radio" name="filtro" value="0" class="form-check-input">
                <label for="despesas" class="form-check-label">Despesa</label>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Descrição</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="descricao" value="<?php echo $linhaConta['descricao'];?>">
                </div><br>


                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text">R$</span>
                    </div>
            
                    <input type="text" name="valor" class="form-control" aria-label="Quantia" value="<?php echo $linhaConta['valor'];?>">
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Data</span>
                    </div>
                    <input type="date" aria-label="First name" class="form-control" name="data" value="<?php echo $linhaConta['data'];?>">
                </div><br>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01" name="categoria">Categoria</label>
                    </div>
                    <select class="custom-select" id="inputGroupSelect01" name="categoria" selected="<?php echo $linhaConta['categoria'];?>">
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
                        <a href="addReceita.php" class="alert-link">Adiciona Receita</a>
                </div>

                <div class="alert alert-danger" role="alert">
                        <a href="addDespesa.php" class="alert-link"> Adiciona Despesa</a>
                </div>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Comentários</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="comentario" value="<?php echo $linhaConta['comentario'];?>">
                </div><br>


                <input type="hidden" name="id" value="<?php echo $linhaConta['id'];?>">
                <input type="submit" value="Editar" class="btn btn-primary btn-lg btn-block">


            </fieldset>
            </div>
        </form>
    </div>

    <footer class="alert alert-secondary">Programa de Controle Financeiro</footer>


    





    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>