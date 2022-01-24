<?php
session_start();
if($_SESSION['msg']){
    echo $_SESSION['msg'];
    $_SESSION['msg'] = "";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Pesquisar registros</h1>

    <div>
        <form action="" method="post">
            <fieldset>
                <legend>Filtrar por</legend>

                <input type="radio" name="filtro" value="nome">
                <label for="nome">Nome</label>

                <input type="radio" name="filtro" value="cpf">
                <label for="cpf">CPF</label>

                <input type="radio" name="filtro" value="nasc">
                <label for="nasc">Nascimento</label>
                
                <input type="radio" name="filtro" value="email">
                <label for="email">Email</label>

                <input type="submit" value="Filtrar">
                
                
            </fieldset>
        
        </form>
    </div>

    <?php
    $filtro = $_POST['filtro'];

    switch($filtro){
        case "nome":
            echo "<form action='filtraNome.php' method='post'>";
            echo "<input type='text' name='nome'>";
            echo "<input type='submit' value='Pesquisar'>";
            echo "</form>";
            break;
        case "cpf":
            echo "<form action='filtraCPF.php' method='post'>";
            echo "<input type='text' name='cpf'>";
            echo "<input type='submit' value='Pesquisar'>";
            echo "</form>";
            break;
        case "nasc":
            echo "<form action='filtraNasc.php' method='post'>";
            echo "<input type='date' name='nasc'>";
            echo "<input type='submit' value='Pesquisar'>";
            echo "</form>";
            break;
        case "email":
            echo "<form action='filtraEmail.php' method='post'>";
            echo "<input type='text' name='email'>";
            echo "<input type='submit' value='Pesquisar'>";
            echo "</form>";
            break;
        default:
            break;
    }
    
    ?>
    <br><br><hr>
    <a href="cadastrar.php">Cadastrar</a>
    <a href="listar.php"> - Listar</a>
    
</body>
</html>