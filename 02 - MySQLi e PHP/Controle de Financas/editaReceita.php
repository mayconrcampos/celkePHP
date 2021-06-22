<?php
include_once("db.php");
session_start();
$id = $_GET['id'];
$queryDescReceita = mysqli_query($conn, "SELECT * FROM cat_receita WHERE id='$id'");
$linha = mysqli_fetch_assoc($queryDescReceita);
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
        <h1 class="display-5">Editar Descrição de Receitas</h1>
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
                <a class="nav-link" href="listaDescReceitas.php">Listar Todas as Descrições de Receitas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Editar Descrição de Receitas</a>
            </li>

        </ul>
    </div>

    <div class="alert alert-primary" role="alert">
        <form action="" method="post">
            <div class="form-group form-check form-check-inline">
            <fieldset>
                <legend>Editar</legend>

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Descrição</span>
                    </div>
                    <input type="text" aria-label="First name" class="form-control" name="receita" value="<?php echo $linha['categoria']; ?>">
                </div><br>

                <input type="submit" value="Editar" class="btn btn-primary btn-lg btn-block">


            </fieldset>
            </div>
            <br>
        </form>
        <?php
            $receita = filter_input(INPUT_POST, "receita", FILTER_SANITIZE_STRING);
            

            if($receita){
                $updateReceita = mysqli_query($conn, "UPDATE cat_receita SET categoria='$receita' WHERE id='$id'");

                if(mysqli_affected_rows($conn)){
                    $_SESSION['msg'] = "Descrição editada com com sucesso.";
                    header("Location: listaDescReceitas.php");
                }else{

                    echo "ERRO ao editar descrição de receita.";   
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